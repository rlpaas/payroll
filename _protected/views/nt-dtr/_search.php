<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\NtDtrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-dtr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'NT_DAbsnt') ?>

    <?= $form->field($model, 'NT_DAbsntRem') ?>

    <?= $form->field($model, 'NT_HLate') ?>

    <?php // echo $form->field($model, 'NT_HUdt') ?>

    <?php // echo $form->field($model, 'NT_DLWOP') ?>

    <?php // echo $form->field($model, 'NT_DLWOPRem') ?>

    <?php // echo $form->field($model, 'NT_OTHReg') ?>

    <?php // echo $form->field($model, 'NT_OTHNDReg') ?>

    <?php // echo $form->field($model, 'NT_OTHRegExc') ?>

    <?php // echo $form->field($model, 'NT_OTHNDRegExc') ?>

    <?php // echo $form->field($model, 'NT_OTHSpcl') ?>

    <?php // echo $form->field($model, 'NT_OTHNDSpcl') ?>

    <?php // echo $form->field($model, 'NT_OTHSpclExc') ?>

    <?php // echo $form->field($model, 'NT_OTHNDSpclExc') ?>

    <?php // echo $form->field($model, 'NT_OTHLgl') ?>

    <?php // echo $form->field($model, 'NT_OTHNDLgl') ?>

    <?php // echo $form->field($model, 'NT_OTHLglExc') ?>

    <?php // echo $form->field($model, 'NT_OTHNDLglExc') ?>

    <?php // echo $form->field($model, 'NT_OTHHolSun') ?>

    <?php // echo $form->field($model, 'NT_OTHNDHolSun') ?>

    <?php // echo $form->field($model, 'NT_OTHHolSunExc') ?>

    <?php // echo $form->field($model, 'NT_OTHNDHolExc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
