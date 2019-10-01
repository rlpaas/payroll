<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NtDtr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-dtr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NT_DAbsnt')->textInput() ?>

    <?= $form->field($model, 'NT_DAbsntRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NT_HLate')->textInput() ?>

    <?= $form->field($model, 'NT_HUdt')->textInput() ?>

    <?= $form->field($model, 'NT_DLWOP')->textInput() ?>

    <?= $form->field($model, 'NT_DLWOPRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NT_OTHReg')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDReg')->textInput() ?>

    <?= $form->field($model, 'NT_OTHRegExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDRegExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHSpcl')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDSpcl')->textInput() ?>

    <?= $form->field($model, 'NT_OTHSpclExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDSpclExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHLgl')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDLgl')->textInput() ?>

    <?= $form->field($model, 'NT_OTHLglExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDLglExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHHolSun')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDHolSun')->textInput() ?>

    <?= $form->field($model, 'NT_OTHHolSunExc')->textInput() ?>

    <?= $form->field($model, 'NT_OTHNDHolExc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
