<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UgLeaveCredits */

$this->title = 'Create Under-Grad Leave Credits';
$this->params['breadcrumbs'][] = ['label' => 'Ug Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ug-leave-credits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
