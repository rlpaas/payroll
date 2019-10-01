<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-deductions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAWU_AF')->textInput() ?>

    <?= $form->field($model, 'FAWU_UD')->textInput() ?>

    <?= $form->field($model, 'FAWU_WF')->textInput() ?>

    <?= $form->field($model, 'HDMF_UPG')->textInput() ?>

    <?= $form->field($model, 'HDMF_MPL2')->textInput() ?>

    <?= $form->field($model, 'Coop')->textInput() ?>

    <?= $form->field($model, 'Tuition')->textInput() ?>

    <?= $form->field($model, 'Tour')->textInput() ?>

    <?= $form->field($model, 'AlumniTick')->textInput() ?>

    <?= $form->field($model, 'ParkingFee')->textInput() ?>

    <?= $form->field($model, 'GradExp')->textInput() ?>

    <?= $form->field($model, 'TogaRent')->textInput() ?>

    <?= $form->field($model, 'StuUniform')->textInput() ?>

    <?= $form->field($model, 'Vaccine')->textInput() ?>

    <?= $form->field($model, 'OtherDeduc')->textInput() ?>

    <?= $form->field($model, 'AdjWTAX')->textInput() ?>

    <?= $form->field($model, 'AdjHDMF')->textInput() ?>

    <?= $form->field($model, 'AdjPHIC')->textInput() ?>

    <?= $form->field($model, 'AdjSSS')->textInput() ?>

    <?= $form->field($model, 'OPBasic')->textInput() ?>

    <?= $form->field($model, 'OPEFA')->textInput() ?>

    <?= $form->field($model, 'OPCOLA')->textInput() ?>

    <?= $form->field($model, 'OPBonusXmas')->textInput() ?>

    <?= $form->field($model, 'OPBonusMidYr')->textInput() ?>

    <?= $form->field($model, 'OPTMP')->textInput() ?>

    <?= $form->field($model, 'OPAdvIP')->textInput() ?>

    <?= $form->field($model, 'OPAllowIP')->textInput() ?>

    <?= $form->field($model, 'OPVLSL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
