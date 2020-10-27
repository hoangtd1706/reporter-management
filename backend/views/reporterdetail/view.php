<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterdetail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reporterdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reporterdetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'rep_code',
            'rep_name',
            'rep_avt',
            'rep_gender',
            'rep_dob',
            'rep_noi_o',
            'rep_chuc_vu',
            'rep_but_danh',
            'rep_giao_duc',
            'rep_chuyen_mon',
            'rep_truong_hoc',
            'rep_chuyen_nganh',
            'rep_hinh_thuc',
            'rep_tot_nghiep',
            'rep_chinh_tri',
            'rep_ngoai_ngu',
            'rep_chung_chi',
            'rep_dang_vien',
            'rep_chuc_dah',
            'rep_so_the_cu',
            'rep_cmnd',
            'rep_ngay_cap_cmnd',
            'rep_cmnd_front',
            'rep_cmnd_back',
            'rep_hdld',
            'rep_scan_bang',
            'rep_scan_hdld',
            'rep_scan_hs_khac',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
