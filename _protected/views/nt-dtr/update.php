<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NtDtr */

$this->title = 'Update Non-Teaching Dtr: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Nt Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nt-dtr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
