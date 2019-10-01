<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UgLeaveCredits */

$this->title = 'Update Under-Grad Leave Credits: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Ug Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ug-leave-credits-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
