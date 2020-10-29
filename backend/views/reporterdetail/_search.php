<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReporterdetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporterdetail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rep_code') ?>

    <?= $form->field($model, 'rep_co_quan') ?>

    <?= $form->field($model, 'rep_name') ?>

    <?= $form->field($model, 'rep_avt') ?>

    <?php // echo $form->field($model, 'rep_gender') ?>

    <?php // echo $form->field($model, 'rep_dob') ?>

    <?php // echo $form->field($model, 'rep_noi_o') ?>

    <?php // echo $form->field($model, 'rep_chuc_vu') ?>

    <?php // echo $form->field($model, 'rep_but_danh') ?>

    <?php // echo $form->field($model, 'rep_giao_duc') ?>

    <?php // echo $form->field($model, 'rep_chuyen_mon') ?>

    <?php // echo $form->field($model, 'rep_truong_hoc') ?>

    <?php // echo $form->field($model, 'rep_chuyen_nganh') ?>

    <?php // echo $form->field($model, 'rep_hinh_thuc') ?>

    <?php // echo $form->field($model, 'rep_tot_nghiep') ?>

    <?php // echo $form->field($model, 'rep_chinh_tri') ?>

    <?php // echo $form->field($model, 'rep_ngoai_ngu') ?>

    <?php // echo $form->field($model, 'rep_chung_chi') ?>

    <?php // echo $form->field($model, 'rep_dang_vien') ?>

    <?php // echo $form->field($model, 'rep_chuc_dah') ?>

    <?php // echo $form->field($model, 'rep_so_the_cu') ?>

    <?php // echo $form->field($model, 'rep_cmnd') ?>

    <?php // echo $form->field($model, 'rep_ngay_cap_cmnd') ?>

    <?php // echo $form->field($model, 'rep_cmnd_front') ?>

    <?php // echo $form->field($model, 'rep_cmnd_back') ?>

    <?php // echo $form->field($model, 'rep_hdld') ?>

    <?php // echo $form->field($model, 'rep_scan_bang') ?>

    <?php // echo $form->field($model, 'rep_scan_hdld') ?>

    <?php // echo $form->field($model, 'rep_scan_hs_khac') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
