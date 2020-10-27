<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterprocess */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporterprocess-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chuc_vu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'co_quan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngach_luong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bac_luong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
