<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NtDtr */

$this->title = 'Create Non-Teaching Dtr';
$this->params['breadcrumbs'][] = ['label' => 'Nt Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-dtr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
