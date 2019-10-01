<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\NtLeaveCreditsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-leave-credits-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'LC_NT_VLAdj') ?>

    <?= $form->field($model, 'LC_NT_VLDAWP') ?>

    <?= $form->field($model, 'LC_NT_VLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_VL') ?>

    <?php // echo $form->field($model, 'LC_NT_SLAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_SLDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_SLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_SL') ?>

    <?php // echo $form->field($model, 'LC_NT_BLAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_BLDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_BLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_BL') ?>

    <?php // echo $form->field($model, 'LC_NT_ELAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_ELDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_ELRem') ?>

    <?php // echo $form->field($model, 'LC_NT_EL') ?>

    <?php // echo $form->field($model, 'LC_NT_SPLAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_SPLDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_SPLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_SPL') ?>

    <?php // echo $form->field($model, 'LC_NT_PLAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_PLDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_PLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_PL') ?>

    <?php // echo $form->field($model, 'LC_NT_MLAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_MLDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_MLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_ML') ?>

    <?php // echo $form->field($model, 'LC_NT_ULAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_ULDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_ULRem') ?>

    <?php // echo $form->field($model, 'LC_NT_UL') ?>

    <?php // echo $form->field($model, 'LC_NT_SLWAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_SLWDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_SLWRem') ?>

    <?php // echo $form->field($model, 'LC_NT_SLW') ?>

    <?php // echo $form->field($model, 'LC_NT_NLAdj') ?>

    <?php // echo $form->field($model, 'LC_NT_NLDAWP') ?>

    <?php // echo $form->field($model, 'LC_NT_NLRem') ?>

    <?php // echo $form->field($model, 'LC_NT_NL') ?>

    <?php // echo $form->field($model, 'NT_OB') ?>

    <?php // echo $form->field($model, 'NT_OBRem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
