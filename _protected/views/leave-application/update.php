<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LeaveApplication */

$this->title = 'Update Leave Application: ' . $model->date_to;
$this->params['breadcrumbs'][] = ['label' => 'Leave Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date_to, 'url' => ['view', 'date_to' => $model->date_to, 'EmpID' => $model->EmpID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="leave-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
