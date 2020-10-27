<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporterprofile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profile_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'so_the_nha_bao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
