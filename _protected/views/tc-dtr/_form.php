<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TcDtr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tc-dtr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HAbsntLec')->textInput() ?>

    <?= $form->field($model, 'UG_HAbsntLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HCMTLec')->textInput() ?>

    <?= $form->field($model, 'UG_HCMTLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HLWOPLec')->textInput() ?>

    <?= $form->field($model, 'UG_HLWOPLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HAbsntLab')->textInput() ?>

    <?= $form->field($model, 'UG_HAbsntLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HCMTLab')->textInput() ?>

    <?= $form->field($model, 'UG_HCMTLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HLWOPLab')->textInput() ?>

    <?= $form->field($model, 'UG_HLWOPLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HAbsntClc')->textInput() ?>

    <?= $form->field($model, 'UG_HAbsntClcRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HCMTClc')->textInput() ?>

    <?= $form->field($model, 'UG_HCMTClcRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_HLWOPClc')->textInput() ?>

    <?= $form->field($model, 'UG_HLWOPClcRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HAbsntLec')->textInput() ?>

    <?= $form->field($model, 'GS_HAbsntLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HCMTLec')->textInput() ?>

    <?= $form->field($model, 'GS_HCMTLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HLWOPLec')->textInput() ?>

    <?= $form->field($model, 'GS_HLWOPLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HAbsntLab')->textInput() ?>

    <?= $form->field($model, 'GS_HAbsntLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HCMTLab')->textInput() ?>

    <?= $form->field($model, 'GS_HCMTLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HLWOPLab')->textInput() ?>

    <?= $form->field($model, 'GS_HLWOPLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HAbsntClc')->textInput() ?>

    <?= $form->field($model, 'GS_HAbsntClcRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HCMTClc')->textInput() ?>

    <?= $form->field($model, 'GS_HCMTClcRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GS_HLWOPClc')->textInput() ?>

    <?= $form->field($model, 'GS_HLWOPClcRem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
