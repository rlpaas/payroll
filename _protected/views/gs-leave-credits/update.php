<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GsLeaveCredits */

$this->title = 'Update Grad-School Leave Credits: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Gs Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gs-leave-credits-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
