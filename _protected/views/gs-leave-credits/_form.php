<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GsLeaveCredits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gs-leave-credits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSVLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSVLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSVLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSVL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSOLVLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSOLVLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSOLVLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSOLVL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSSL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSOLSLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSOLSLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSOLSLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSOLSL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSBLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSBLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSBLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSBL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSELAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSELHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSELRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSEL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSPLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSPLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSSPL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSPLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSPLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSPL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSMLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSMLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSMLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSML')->textInput() ?>

    <?= $form->field($model, 'LEC_GSULAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSULHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSULRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSUL')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSLWAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSLWHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSSLWRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSSLW')->textInput() ?>

    <?= $form->field($model, 'LEC_GSNLAdj')->textInput() ?>

    <?= $form->field($model, 'LEC_GSNLHAWP')->textInput() ?>

    <?= $form->field($model, 'LEC_GSNLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEC_GSNL')->textInput() ?>

    <?= $form->field($model, 'GSOBLec')->textInput() ?>

    <?= $form->field($model, 'GSOBLecRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSVLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSVLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSVLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSVL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSOLVLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSOLVLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSOLVLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSOLVL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSSL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSOLSLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSOLSLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSOLSLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSOLSL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSBLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSBLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSBLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSBL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSELAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSELHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSELRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSEL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSPLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSPLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSSPL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSPLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSPLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSPL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSMLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSMLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSMLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSML')->textInput() ?>

    <?= $form->field($model, 'LAB_GSULAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSULHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSULRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSUL')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSLWAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSLWHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSSLWRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSSLW')->textInput() ?>

    <?= $form->field($model, 'LAB_GSNLAdj')->textInput() ?>

    <?= $form->field($model, 'LAB_GSNLHAWP')->textInput() ?>

    <?= $form->field($model, 'LAB_GSNLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAB_GSNL')->textInput() ?>

    <?= $form->field($model, 'GSOBLab')->textInput() ?>

    <?= $form->field($model, 'GSOBLabRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSVLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSVLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSVLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSVL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSOLVLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSOLVLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSOLVLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSOLVL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSSL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSOLSLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSOLSLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSOLSLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSOLSL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSBLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSBLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSBLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSBL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSELAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSELHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSELRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSEL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSPLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSPLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSSPL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSPLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSPLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSPLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSPL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSMLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSMLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSMLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSML')->textInput() ?>

    <?= $form->field($model, 'CLC_GSULAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSULHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSULRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSUL')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSLWAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSLWHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSSLWRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSSLW')->textInput() ?>

    <?= $form->field($model, 'CLC_GSNLAdj')->textInput() ?>

    <?= $form->field($model, 'CLC_GSNLHAWP')->textInput() ?>

    <?= $form->field($model, 'CLC_GSNLRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLC_GSNL')->textInput() ?>

    <?= $form->field($model, 'GSOBClc')->textInput() ?>

    <?= $form->field($model, 'GSOBClcRem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
