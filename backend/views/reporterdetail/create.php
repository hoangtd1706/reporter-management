<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterdetail */

$this->title = 'Create Reporterdetail';
$this->params['breadcrumbs'][] = ['label' => 'Reporterdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporterdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
