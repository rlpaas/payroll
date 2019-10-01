<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */

$this->title = 'Update Other Deductions: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Other Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="other-deductions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
