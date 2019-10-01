<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\UgLeaveCreditsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ug-leave-credits-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'LEC_UGVLAdj') ?>

    <?= $form->field($model, 'LEC_UGVLHAWP') ?>

    <?= $form->field($model, 'LEC_UGVLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGVL') ?>

    <?php // echo $form->field($model, 'LEC_UGOLVLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGOLVLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGOLVLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGOLVL') ?>

    <?php // echo $form->field($model, 'LEC_UGSLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGSLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGSLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGSL') ?>

    <?php // echo $form->field($model, 'LEC_UGOLSLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGOLSLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGOLSLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGOLSL') ?>

    <?php // echo $form->field($model, 'LEC_UGBLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGBLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGBLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGBL') ?>

    <?php // echo $form->field($model, 'LEC_UGELAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGELHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGELRem') ?>

    <?php // echo $form->field($model, 'LEC_UGEL') ?>

    <?php // echo $form->field($model, 'LEC_UGSPLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGSPLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGSPLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGSPL') ?>

    <?php // echo $form->field($model, 'LEC_UGPLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGPLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGPLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGPL') ?>

    <?php // echo $form->field($model, 'LEC_UGMLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGMLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGMLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGML') ?>

    <?php // echo $form->field($model, 'LEC_UGULAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGULHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGULRem') ?>

    <?php // echo $form->field($model, 'LEC_UGUL') ?>

    <?php // echo $form->field($model, 'LEC_UGSLWAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGSLWHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGSLWRem') ?>

    <?php // echo $form->field($model, 'LEC_UGSLW') ?>

    <?php // echo $form->field($model, 'LEC_UGNLAdj') ?>

    <?php // echo $form->field($model, 'LEC_UGNLHAWP') ?>

    <?php // echo $form->field($model, 'LEC_UGNLRem') ?>

    <?php // echo $form->field($model, 'LEC_UGNL') ?>

    <?php // echo $form->field($model, 'UGOBLec') ?>

    <?php // echo $form->field($model, 'UGOBLecRem') ?>

    <?php // echo $form->field($model, 'LAB_UGVLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGVLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGVLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGVL') ?>

    <?php // echo $form->field($model, 'LAB_UGOLVLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGOLVLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGOLVLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGOLVL') ?>

    <?php // echo $form->field($model, 'LAB_UGSLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGSLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGSLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGSL') ?>

    <?php // echo $form->field($model, 'LAB_UGOLSLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGOLSLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGOLSLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGOLSL') ?>

    <?php // echo $form->field($model, 'LAB_UGBLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGBLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGBLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGBL') ?>

    <?php // echo $form->field($model, 'LAB_UGELAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGELHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGELRem') ?>

    <?php // echo $form->field($model, 'LAB_UGEL') ?>

    <?php // echo $form->field($model, 'LAB_UGSPLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGSPLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGSPLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGSPL') ?>

    <?php // echo $form->field($model, 'LAB_UGPLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGPLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGPLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGPL') ?>

    <?php // echo $form->field($model, 'LAB_UGMLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGMLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGMLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGML') ?>

    <?php // echo $form->field($model, 'LAB_UGULAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGULHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGULRem') ?>

    <?php // echo $form->field($model, 'LAB_UGUL') ?>

    <?php // echo $form->field($model, 'LAB_UGSLWAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGSLWHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGSLWRem') ?>

    <?php // echo $form->field($model, 'LAB_UGSLW') ?>

    <?php // echo $form->field($model, 'LAB_UGNLAdj') ?>

    <?php // echo $form->field($model, 'LAB_UGNLHAWP') ?>

    <?php // echo $form->field($model, 'LAB_UGNLRem') ?>

    <?php // echo $form->field($model, 'LAB_UGNL') ?>

    <?php // echo $form->field($model, 'UGOBLab') ?>

    <?php // echo $form->field($model, 'UGOBLabRem') ?>

    <?php // echo $form->field($model, 'CLC_UGVLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGVLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGVLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGVL') ?>

    <?php // echo $form->field($model, 'CLC_UGOLVLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGOLVLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGOLVLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGOLVL') ?>

    <?php // echo $form->field($model, 'CLC_UGSLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGSLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGSLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGSL') ?>

    <?php // echo $form->field($model, 'CLC_UGOLSLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGOLSLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGOLSLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGOLSL') ?>

    <?php // echo $form->field($model, 'CLC_UGBLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGBLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGBLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGBL') ?>

    <?php // echo $form->field($model, 'CLC_UGELAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGELHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGELRem') ?>

    <?php // echo $form->field($model, 'CLC_UGEL') ?>

    <?php // echo $form->field($model, 'CLC_UGSPLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGSPLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGSPLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGSPL') ?>

    <?php // echo $form->field($model, 'CLC_UGPLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGPLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGPLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGPL') ?>

    <?php // echo $form->field($model, 'CLC_UGMLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGMLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGMLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGML') ?>

    <?php // echo $form->field($model, 'CLC_UGULAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGULHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGULRem') ?>

    <?php // echo $form->field($model, 'CLC_UGUL') ?>

    <?php // echo $form->field($model, 'CLC_UGSLWAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGSLWHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGSLWRem') ?>

    <?php // echo $form->field($model, 'CLC_UGSLW') ?>

    <?php // echo $form->field($model, 'CLC_UGNLAdj') ?>

    <?php // echo $form->field($model, 'CLC_UGNLHAWP') ?>

    <?php // echo $form->field($model, 'CLC_UGNLRem') ?>

    <?php // echo $form->field($model, 'CLC_UGNL') ?>

    <?php // echo $form->field($model, 'UGOBClc') ?>

    <?php // echo $form->field($model, 'UGOBClcRem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
