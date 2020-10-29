<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterprofile */
/* @var $form yii\widgets\ActiveForm */
$cate = Category::find()->all();
?>

<div class="reporterprofile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profile_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'so_the_nha_bao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate_id')->dropDownList(ArrayHelper::map($cate,'id','cate_name')) ?>

    <?= $form->field($model, 'status')->dropDownList([
        'Tạo mới',
        'Đã duyệt'
    ], ['prompt' => '-- Chọn trạng thái --']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
