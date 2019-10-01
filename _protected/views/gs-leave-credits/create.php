<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GsLeaveCredits */

$this->title = 'Create Grad-School Leave Credits';
$this->params['breadcrumbs'][] = ['label' => 'Gs Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gs-leave-credits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
