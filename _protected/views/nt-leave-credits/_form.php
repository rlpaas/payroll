<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NtLeaveCredits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-leave-credits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_VLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_VLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_VLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_VL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_SL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_BLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_BLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_BLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_BL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_ELAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_ELDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_ELRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_EL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SPLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SPLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_SPL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_PLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_PLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_PLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_PL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_MLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_MLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_MLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_ML')->textInput() ?>

    <?= $form->field($model, 'LC_NT_ULAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_ULDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_ULRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_UL')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SLWAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SLWDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_SLWRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_SLW')->textInput() ?>

    <?= $form->field($model, 'LC_NT_NLAdj')->textInput() ?>

    <?= $form->field($model, 'LC_NT_NLDAWP')->textInput() ?>

    <?= $form->field($model, 'LC_NT_NLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LC_NT_NL')->textInput() ?>

    <?= $form->field($model, 'NT_OB')->textInput() ?>

    <?= $form->field($model, 'NT_OBRem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
