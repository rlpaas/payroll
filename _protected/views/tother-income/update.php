<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TotherIncome */

$this->title = 'Update Teaching Other Income: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tother Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tother-income-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
