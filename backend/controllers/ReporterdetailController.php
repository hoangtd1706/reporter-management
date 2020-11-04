<?php

namespace backend\controllers;

use backend\models\Reporter;
use backend\models\Reporterprocess;
use Yii;
use backend\models\Reporterdetail;
use backend\models\ReporterdetailSearch;
use backend\models\Model;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * ReporterdetailController implements the CRUD actions for Reporterdetail model.
 */
class ReporterdetailController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Reporterdetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReporterdetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reporterdetail model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $modelProcess = Reporterprocess::find()->where(['rep_code' => $model->rep_code])->all();
        return $this->render('view', [
            'model' => $model,
            'modelProcess' => $modelProcess,
        ]);
    }

    /**
     * Creates a new Reporterdetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reporterdetail();
        $modelRep = new Reporter();
        $modelsProcess = [new Reporterprocess];
        $time = time();


        if ($model->load(Yii::$app->request->post())) {
            $modelsProcess = Model::createMultiple(Reporterprocess::className());
            Model::loadMultiple($modelsProcess, Yii::$app->request->post());

            /*Tạo mã phóng viên*/
            $rep = Reporter::find()->orderBy(['created_at' => SORT_DESC])->one();
            $id = 1 + (int)substr($rep->rep_code, 2);
            $rep_code = 'PV' . "" . (string)$id;

            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsProcess),
                    ActiveForm::validate($model)
                );
            }

            /*$valid = $model->validate();
            $valid = Model::validateMultiple($modelsProcess) && $valid;*/

            $modelRep->rep_code = $rep_code;
            $modelRep->status = 1;
            $modelRep->created_at = $time;
            $modelRep->updated_at = $time;
            $modelRep->rep_code = $rep_code;
            if ($modelRep->save()) {
                $model->rep_code = $modelRep->rep_code;
                $model->created_at = $time;
                $model->updated_at = $time;
                if ($model->save()) {
                    foreach ($modelsProcess as $processs) {
                        $processs->rep_code = $model->rep_code;
                        $processs->save();
                    }
                }
            }


            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'modelsProcess' => (empty($modelsProcess)) ? [new Reporterprocess] : $modelsProcess,
        ]);
        die();
    }

    /**
     * Updates an existing Reporterdetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $time = time();
        $model->updated_at = $time;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Reporterdetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reporterdetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reporterdetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reporterdetail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
