<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\GsLeaveCreditsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gs-leave-credits-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'LEC_GSVLAdj') ?>

    <?= $form->field($model, 'LEC_GSVLHAWP') ?>

    <?= $form->field($model, 'LEC_GSVLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSVL') ?>

    <?php // echo $form->field($model, 'LEC_GSOLVLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSOLVLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSOLVLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSOLVL') ?>

    <?php // echo $form->field($model, 'LEC_GSSLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSSLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSSLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSSL') ?>

    <?php // echo $form->field($model, 'LEC_GSOLSLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSOLSLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSOLSLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSOLSL') ?>

    <?php // echo $form->field($model, 'LEC_GSBLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSBLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSBLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSBL') ?>

    <?php // echo $form->field($model, 'LEC_GSELAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSELHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSELRem') ?>

    <?php // echo $form->field($model, 'LEC_GSEL') ?>

    <?php // echo $form->field($model, 'LEC_GSSPLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSSPLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSSPLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSSPL') ?>

    <?php // echo $form->field($model, 'LEC_GSPLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSPLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSPLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSPL') ?>

    <?php // echo $form->field($model, 'LEC_GSMLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSMLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSMLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSML') ?>

    <?php // echo $form->field($model, 'LEC_GSULAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSULHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSULRem') ?>

    <?php // echo $form->field($model, 'LEC_GSUL') ?>

    <?php // echo $form->field($model, 'LEC_GSSLWAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSSLWHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSSLWRem') ?>

    <?php // echo $form->field($model, 'LEC_GSSLW') ?>

    <?php // echo $form->field($model, 'LEC_GSNLAdj') ?>

    <?php // echo $form->field($model, 'LEC_GSNLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_GSNLRem') ?>

    <?php // echo $form->field($model, 'LEC_GSNL') ?>

    <?php // echo $form->field($model, 'GSOBLec') ?>

    <?php // echo $form->field($model, 'GSOBLecRem') ?>

    <?php // echo $form->field($model, 'LAB_GSVLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSVLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSVLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSVL') ?>

    <?php // echo $form->field($model, 'LAB_GSOLVLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSOLVLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSOLVLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSOLVL') ?>

    <?php // echo $form->field($model, 'LAB_GSSLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSSLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSSLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSSL') ?>

    <?php // echo $form->field($model, 'LAB_GSOLSLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSOLSLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSOLSLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSOLSL') ?>

    <?php // echo $form->field($model, 'LAB_GSBLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSBLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSBLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSBL') ?>

    <?php // echo $form->field($model, 'LAB_GSELAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSELHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSELRem') ?>

    <?php // echo $form->field($model, 'LAB_GSEL') ?>

    <?php // echo $form->field($model, 'LAB_GSSPLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSSPLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSSPLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSSPL') ?>

    <?php // echo $form->field($model, 'LAB_GSPLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSPLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSPLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSPL') ?>

    <?php // echo $form->field($model, 'LAB_GSMLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSMLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSMLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSML') ?>

    <?php // echo $form->field($model, 'LAB_GSULAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSULHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSULRem') ?>

    <?php // echo $form->field($model, 'LAB_GSUL') ?>

    <?php // echo $form->field($model, 'LAB_GSSLWAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSSLWHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSSLWRem') ?>

    <?php // echo $form->field($model, 'LAB_GSSLW') ?>

    <?php // echo $form->field($model, 'LAB_GSNLAdj') ?>

    <?php // echo $form->field($model, 'LAB_GSNLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_GSNLRem') ?>

    <?php // echo $form->field($model, 'LAB_GSNL') ?>

    <?php // echo $form->field($model, 'GSOBLab') ?>

    <?php // echo $form->field($model, 'GSOBLabRem') ?>

    <?php // echo $form->field($model, 'CLC_GSVLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSVLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSVLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSVL') ?>

    <?php // echo $form->field($model, 'CLC_GSOLVLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSOLVLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSOLVLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSOLVL') ?>

    <?php // echo $form->field($model, 'CLC_GSSLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSSLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSSLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSSL') ?>

    <?php // echo $form->field($model, 'CLC_GSOLSLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSOLSLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSOLSLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSOLSL') ?>

    <?php // echo $form->field($model, 'CLC_GSBLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSBLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSBLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSBL') ?>

    <?php // echo $form->field($model, 'CLC_GSELAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSELHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSELRem') ?>

    <?php // echo $form->field($model, 'CLC_GSEL') ?>

    <?php // echo $form->field($model, 'CLC_GSSPLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSSPLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSSPLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSSPL') ?>

    <?php // echo $form->field($model, 'CLC_GSPLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSPLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSPLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSPL') ?>

    <?php // echo $form->field($model, 'CLC_GSMLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSMLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSMLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSML') ?>

    <?php // echo $form->field($model, 'CLC_GSULAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSULHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSULRem') ?>

    <?php // echo $form->field($model, 'CLC_GSUL') ?>

    <?php // echo $form->field($model, 'CLC_GSSLWAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSSLWHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSSLWRem') ?>

    <?php // echo $form->field($model, 'CLC_GSSLW') ?>

    <?php // echo $form->field($model, 'CLC_GSNLAdj') ?>

    <?php // echo $form->field($model, 'CLC_GSNLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_GSNLRem') ?>

    <?php // echo $form->field($model, 'CLC_GSNL') ?>

    <?php // echo $form->field($model, 'GSOBClc') ?>

    <?php // echo $form->field($model, 'GSOBClcRem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
