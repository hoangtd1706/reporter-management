<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterprocess */

$this->title = 'Create Reporterprocess';
$this->params['breadcrumbs'][] = ['label' => 'Reporterprocesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporterprocess-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
