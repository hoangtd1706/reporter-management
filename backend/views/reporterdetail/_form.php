<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterdetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporterdetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_avt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_gender')->textInput() ?>

    <?= $form->field($model, 'rep_dob')->textInput() ?>

    <?= $form->field($model, 'rep_noi_o')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_chuc_vu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_but_danh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_giao_duc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_chuyen_mon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_truong_hoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_chuyen_nganh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_hinh_thuc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_tot_nghiep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_chinh_tri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_ngoai_ngu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_chung_chi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_dang_vien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_chuc_dah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_so_the_cu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_cmnd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_ngay_cap_cmnd')->textInput() ?>

    <?= $form->field($model, 'rep_cmnd_front')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_cmnd_back')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_hdld')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_scan_bang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_scan_hdld')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_scan_hs_khac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
