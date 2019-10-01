<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeLeave */

$this->title = 'Create Type Leave';
$this->params['breadcrumbs'][] = ['label' => 'Type Leaves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-leave-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
