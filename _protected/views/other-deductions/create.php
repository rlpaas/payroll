<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */

$this->title = 'Create Other Deductions';
$this->params['breadcrumbs'][] = ['label' => 'Other Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-deductions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
