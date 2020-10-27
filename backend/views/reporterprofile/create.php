<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterprofile */

$this->title = 'Create Reporterprofile';
$this->params['breadcrumbs'][] = ['label' => 'Reporterprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporterprofile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
