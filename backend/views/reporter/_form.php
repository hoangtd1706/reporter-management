<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        1 => 'Hoạt động',
        2 => 'Không hoạt động'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
