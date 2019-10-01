<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NtLeaveCredits */

$this->title = 'Create Non-Teaching Leave Credits';
$this->params['breadcrumbs'][] = ['label' => 'Nt Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-leave-credits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
