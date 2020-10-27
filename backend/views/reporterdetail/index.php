<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReporterdetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reporterdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporterdetail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reporterdetail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'rep_code',
            'rep_name',
            'rep_avt',
            'rep_gender',
            //'rep_dob',
            //'rep_noi_o',
            //'rep_chuc_vu',
            //'rep_but_danh',
            //'rep_giao_duc',
            //'rep_chuyen_mon',
            //'rep_truong_hoc',
            //'rep_chuyen_nganh',
            //'rep_hinh_thuc',
            //'rep_tot_nghiep',
            //'rep_chinh_tri',
            //'rep_ngoai_ngu',
            //'rep_chung_chi',
            //'rep_dang_vien',
            //'rep_chuc_dah',
            //'rep_so_the_cu',
            //'rep_cmnd',
            //'rep_ngay_cap_cmnd',
            //'rep_cmnd_front',
            //'rep_cmnd_back',
            //'rep_hdld',
            //'rep_scan_bang',
            //'rep_scan_hdld',
            //'rep_scan_hs_khac',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
