<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayPeriod */

$this->title = 'Create Pay Period';
$this->params['breadcrumbs'][] = ['label' => 'Pay Periods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pay-period-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
