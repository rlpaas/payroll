<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TcDtrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tc-dtr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'UG_HAbsntLec') ?>

    <?= $form->field($model, 'UG_HAbsntLecRem') ?>

    <?= $form->field($model, 'UG_HCMTLec') ?>

    <?php // echo $form->field($model, 'UG_HCMTLecRem') ?>

    <?php // echo $form->field($model, 'UG_HLWOPLec') ?>

    <?php // echo $form->field($model, 'UG_HLWOPLecRem') ?>

    <?php // echo $form->field($model, 'UG_HAbsntLab') ?>

    <?php // echo $form->field($model, 'UG_HAbsntLabRem') ?>

    <?php // echo $form->field($model, 'UG_HCMTLab') ?>

    <?php // echo $form->field($model, 'UG_HCMTLabRem') ?>

    <?php // echo $form->field($model, 'UG_HLWOPLab') ?>

    <?php // echo $form->field($model, 'UG_HLWOPLabRem') ?>

    <?php // echo $form->field($model, 'UG_HAbsntClc') ?>

    <?php // echo $form->field($model, 'UG_HAbsntClcRem') ?>

    <?php // echo $form->field($model, 'UG_HCMTClc') ?>

    <?php // echo $form->field($model, 'UG_HCMTClcRem') ?>

    <?php // echo $form->field($model, 'UG_HLWOPClc') ?>

    <?php // echo $form->field($model, 'UG_HLWOPClcRem') ?>

    <?php // echo $form->field($model, 'GS_HAbsntLec') ?>

    <?php // echo $form->field($model, 'GS_HAbsntLecRem') ?>

    <?php // echo $form->field($model, 'GS_HCMTLec') ?>

    <?php // echo $form->field($model, 'GS_HCMTLecRem') ?>

    <?php // echo $form->field($model, 'GS_HLWOPLec') ?>

    <?php // echo $form->field($model, 'GS_HLWOPLecRem') ?>

    <?php // echo $form->field($model, 'GS_HAbsntLab') ?>

    <?php // echo $form->field($model, 'GS_HAbsntLabRem') ?>

    <?php // echo $form->field($model, 'GS_HCMTLab') ?>

    <?php // echo $form->field($model, 'GS_HCMTLabRem') ?>

    <?php // echo $form->field($model, 'GS_HLWOPLab') ?>

    <?php // echo $form->field($model, 'GS_HLWOPLabRem') ?>

    <?php // echo $form->field($model, 'GS_HAbsntClc') ?>

    <?php // echo $form->field($model, 'GS_HAbsntClcRem') ?>

    <?php // echo $form->field($model, 'GS_HCMTClc') ?>

    <?php // echo $form->field($model, 'GS_HCMTClcRem') ?>

    <?php // echo $form->field($model, 'GS_HLWOPClc') ?>

    <?php // echo $form->field($model, 'GS_HLWOPClcRem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
