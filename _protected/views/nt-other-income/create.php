<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NtOtherIncome */

$this->title = 'Create Non-Teaching Other Income';
$this->params['breadcrumbs'][] = ['label' => 'Nt Other Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-other-income-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
