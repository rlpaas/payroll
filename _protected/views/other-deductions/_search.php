<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\OtherDeductionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-deductions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'FAWU_AF') ?>

    <?= $form->field($model, 'FAWU_UD') ?>

    <?= $form->field($model, 'FAWU_WF') ?>

    <?php // echo $form->field($model, 'HDMF_UPG') ?>

    <?php // echo $form->field($model, 'HDMF_MPL2') ?>

    <?php // echo $form->field($model, 'Coop') ?>

    <?php // echo $form->field($model, 'Tuition') ?>

    <?php // echo $form->field($model, 'Tour') ?>

    <?php // echo $form->field($model, 'AlumniTick') ?>

    <?php // echo $form->field($model, 'ParkingFee') ?>

    <?php // echo $form->field($model, 'GradExp') ?>

    <?php // echo $form->field($model, 'TogaRent') ?>

    <?php // echo $form->field($model, 'StuUniform') ?>

    <?php // echo $form->field($model, 'Vaccine') ?>

    <?php // echo $form->field($model, 'OtherDeduc') ?>

    <?php // echo $form->field($model, 'AdjWTAX') ?>

    <?php // echo $form->field($model, 'AdjHDMF') ?>

    <?php // echo $form->field($model, 'AdjPHIC') ?>

    <?php // echo $form->field($model, 'AdjSSS') ?>

    <?php // echo $form->field($model, 'OPBasic') ?>

    <?php // echo $form->field($model, 'OPEFA') ?>

    <?php // echo $form->field($model, 'OPCOLA') ?>

    <?php // echo $form->field($model, 'OPBonusXmas') ?>

    <?php // echo $form->field($model, 'OPBonusMidYr') ?>

    <?php // echo $form->field($model, 'OPTMP') ?>

    <?php // echo $form->field($model, 'OPAdvIP') ?>

    <?php // echo $form->field($model, 'OPAllowIP') ?>

    <?php // echo $form->field($model, 'OPVLSL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
