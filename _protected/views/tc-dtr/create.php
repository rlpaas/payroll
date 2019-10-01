<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TcDtr */

$this->title = 'Create Teaching Dtr';
$this->params['breadcrumbs'][] = ['label' => 'Tc Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-dtr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
