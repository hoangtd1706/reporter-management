<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterprofile */

$this->title = 'Update Reporterprofile: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reporterprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reporterprofile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
