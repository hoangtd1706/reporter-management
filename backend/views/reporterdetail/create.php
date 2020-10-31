<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterdetail */
/* @var $modelsProcess backend\models\Reporterdetail */

$this->title = 'Create Reporterdetail';
?>
<div class="reporterdetail-create">


    <?= $this->render('_form', [
        'model' => $model,
        'modelsProcess' => $modelsProcess,
    ]) ?>

</div>
