<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TotherIncomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tother-income-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'TC_AdvIP') ?>

    <?= $form->field($model, 'TC_HazardPay') ?>

    <?= $form->field($model, 'TC_Honorarium') ?>

    <?php // echo $form->field($model, 'TC_HRMAllowNTax') ?>

    <?php // echo $form->field($model, 'TC_HRMAllowTax') ?>

    <?php // echo $form->field($model, 'TC_IPAllow') ?>

    <?php // echo $form->field($model, 'TC_RLEAllowNTax') ?>

    <?php // echo $form->field($model, 'TC_RLEAllowTax') ?>

    <?php // echo $form->field($model, 'TC_RFDAlumniTick') ?>

    <?php // echo $form->field($model, 'TC_RFDCCLoan') ?>

    <?php // echo $form->field($model, 'TC_RFDCOOP') ?>

    <?php // echo $form->field($model, 'TC_RFDFAWU') ?>

    <?php // echo $form->field($model, 'TC_RFDHDMFMPL') ?>

    <?php // echo $form->field($model, 'TC_RFDHDMFP') ?>

    <?php // echo $form->field($model, 'TC_RFDHDMFU') ?>

    <?php // echo $form->field($model, 'TC_RFDHF') ?>

    <?php // echo $form->field($model, 'TC_RFDMedicare') ?>

    <?php // echo $form->field($model, 'TC_RFDPHIC') ?>

    <?php // echo $form->field($model, 'TC_RFDSSSCondo') ?>

    <?php // echo $form->field($model, 'TC_RFDSSSL') ?>

    <?php // echo $form->field($model, 'TC_RFDSSSP') ?>

    <?php // echo $form->field($model, 'TC_RFDTax') ?>

    <?php // echo $form->field($model, 'TC_RFDTaxAdv') ?>

    <?php // echo $form->field($model, 'TC_RFDTF') ?>

    <?php // echo $form->field($model, 'TC_RFDOthers') ?>

    <?php // echo $form->field($model, 'TC_RFDOthersRem') ?>

    <?php // echo $form->field($model, 'TC_BNMidYrNTax') ?>

    <?php // echo $form->field($model, 'TC_BNMidYrTax') ?>

    <?php // echo $form->field($model, 'TC_BNSLVLNTax') ?>

    <?php // echo $form->field($model, 'TC_BNSLVLTax') ?>

    <?php // echo $form->field($model, 'TC_BNTMPNTax') ?>

    <?php // echo $form->field($model, 'TC_BNTMPTax') ?>

    <?php // echo $form->field($model, 'TC_BNXmasNTax') ?>

    <?php // echo $form->field($model, 'TC_BNXmasTax') ?>

    <?php // echo $form->field($model, 'TC_SHSBNTMPNTax') ?>

    <?php // echo $form->field($model, 'TC_SHSBNTMPTax') ?>

    <?php // echo $form->field($model, 'TC_SSBNMidYrTax') ?>

    <?php // echo $form->field($model, 'TC_SSBNSLVLTax') ?>

    <?php // echo $form->field($model, 'TC_SSBNTMPTax') ?>

    <?php // echo $form->field($model, 'TC_SSBNXmasTax') ?>

    <?php // echo $form->field($model, 'TC_BonusNTax') ?>

    <?php // echo $form->field($model, 'TC_BonusTax') ?>

    <?php // echo $form->field($model, 'TC_AdjIPAllow') ?>

    <?php // echo $form->field($model, 'TC_AdviserFee') ?>

    <?php // echo $form->field($model, 'TC_BackPay') ?>

    <?php // echo $form->field($model, 'TC_BackPayEFA') ?>

    <?php // echo $form->field($model, 'TC_BackPayCOLA') ?>

    <?php // echo $form->field($model, 'TC_BigClassPay') ?>

    <?php // echo $form->field($model, 'TC_CLPPay') ?>

    <?php // echo $form->field($model, 'TC_ClassOrgAdvs') ?>

    <?php // echo $form->field($model, 'TC_CommOutrchPay') ?>

    <?php // echo $form->field($model, 'TC_CommImmersion') ?>

    <?php // echo $form->field($model, 'TC_Coordi') ?>

    <?php // echo $form->field($model, 'TC_CompreExam') ?>

    <?php // echo $form->field($model, 'TC_CriticWork') ?>

    <?php // echo $form->field($model, 'TC_DentPreBoard') ?>

    <?php // echo $form->field($model, 'TC_DentALE') ?>

    <?php // echo $form->field($model, 'TC_Differential') ?>

    <?php // echo $form->field($model, 'TC_EnhcmtSeminar') ?>

    <?php // echo $form->field($model, 'TC_EnrAdvising') ?>

    <?php // echo $form->field($model, 'TC_ExpertisePrm') ?>

    <?php // echo $form->field($model, 'TC_ExtProgPay') ?>

    <?php // echo $form->field($model, 'TC_Externship') ?>

    <?php // echo $form->field($model, 'TC_Goodwill') ?>

    <?php // echo $form->field($model, 'TC_GratuityNTax') ?>

    <?php // echo $form->field($model, 'TC_GratuityTax') ?>

    <?php // echo $form->field($model, 'TC_HardshipPay') ?>

    <?php // echo $form->field($model, 'TC_HolidayPay') ?>

    <?php // echo $form->field($model, 'TC_HonorariumNF') ?>

    <?php // echo $form->field($model, 'TC_HosptOrient') ?>

    <?php // echo $form->field($model, 'TC_IncluProg') ?>

    <?php // echo $form->field($model, 'TC_IncentiveLP') ?>

    <?php // echo $form->field($model, 'TC_IncrmtlProceeds') ?>

    <?php // echo $form->field($model, 'TC_InternshipPay') ?>

    <?php // echo $form->field($model, 'TC_MaternityBnft') ?>

    <?php // echo $form->field($model, 'TC_OneTimeIncentive') ?>

    <?php // echo $form->field($model, 'TC_Practicum') ?>

    <?php // echo $form->field($model, 'TC_Proctorship') ?>

    <?php // echo $form->field($model, 'TC_ReviewNTax') ?>

    <?php // echo $form->field($model, 'TC_ReviewTax') ?>

    <?php // echo $form->field($model, 'TC_RICE') ?>

    <?php // echo $form->field($model, 'TC_SalarySHS') ?>

    <?php // echo $form->field($model, 'TC_SpclExam') ?>

    <?php // echo $form->field($model, 'TC_Substitution') ?>

    <?php // echo $form->field($model, 'TC_Training') ?>

    <?php // echo $form->field($model, 'TC_TranspoAllow') ?>

    <?php // echo $form->field($model, 'TC_Tutorial') ?>

    <?php // echo $form->field($model, 'TC_OINTax') ?>

    <?php // echo $form->field($model, 'TC_OINTaxRem') ?>

    <?php // echo $form->field($model, 'TC_OITax') ?>

    <?php // echo $form->field($model, 'TC_OITaxRem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
