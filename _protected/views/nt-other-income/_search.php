<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\NtOtherIncomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-other-income-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'NT_AdvIP') ?>

    <?= $form->field($model, 'NT_HazardPay') ?>

    <?= $form->field($model, 'NT_Honorarium') ?>

    <?php // echo $form->field($model, 'NT_HRMAllowNTax') ?>

    <?php // echo $form->field($model, 'NT_HRMAllowTax') ?>

    <?php // echo $form->field($model, 'NT_IPAllow') ?>

    <?php // echo $form->field($model, 'NT_RLEAllowNTax') ?>

    <?php // echo $form->field($model, 'NT_RLEAllowTax') ?>

    <?php // echo $form->field($model, 'NT_RFDAlumniTick') ?>

    <?php // echo $form->field($model, 'NT_RFDCCLoan') ?>

    <?php // echo $form->field($model, 'NT_RFDCOOP') ?>

    <?php // echo $form->field($model, 'NT_RFDFAWU') ?>

    <?php // echo $form->field($model, 'NT_RFDHDMFMPL') ?>

    <?php // echo $form->field($model, 'NT_RFDHDMFP') ?>

    <?php // echo $form->field($model, 'NT_RFDHDMFU') ?>

    <?php // echo $form->field($model, 'NT_RFDHF') ?>

    <?php // echo $form->field($model, 'NT_RFDMedicare') ?>

    <?php // echo $form->field($model, 'NT_RFDPHIC') ?>

    <?php // echo $form->field($model, 'NT_RFDSSSCondo') ?>

    <?php // echo $form->field($model, 'NT_RFDSSSL') ?>

    <?php // echo $form->field($model, 'NT_RFDSSSP') ?>

    <?php // echo $form->field($model, 'NT_RFDTax') ?>

    <?php // echo $form->field($model, 'NT_RFDTaxAdv') ?>

    <?php // echo $form->field($model, 'NT_RFDTF') ?>

    <?php // echo $form->field($model, 'NT_RFDOthers') ?>

    <?php // echo $form->field($model, 'NT_RFDOthersRem') ?>

    <?php // echo $form->field($model, 'NT_BNMidYrNTax') ?>

    <?php // echo $form->field($model, 'NT_BNMidYrTax') ?>

    <?php // echo $form->field($model, 'NT_BNSLVLNTax') ?>

    <?php // echo $form->field($model, 'NT_BNSLVLTax') ?>

    <?php // echo $form->field($model, 'NT_BNTMPNTax') ?>

    <?php // echo $form->field($model, 'NT_BNTMPTax') ?>

    <?php // echo $form->field($model, 'NT_BNXmasNTax') ?>

    <?php // echo $form->field($model, 'NT_BNXmasTax') ?>

    <?php // echo $form->field($model, 'NT_SHSBNTMPNTax') ?>

    <?php // echo $form->field($model, 'NT_SHSBNTMPTax') ?>

    <?php // echo $form->field($model, 'NT_SSBNMidYrTax') ?>

    <?php // echo $form->field($model, 'NT_SSBNSLVLTax') ?>

    <?php // echo $form->field($model, 'NT_SSBNTMPTax') ?>

    <?php // echo $form->field($model, 'NT_SSBNXmasTax') ?>

    <?php // echo $form->field($model, 'NT_BonusNTax') ?>

    <?php // echo $form->field($model, 'NT_BonusTax') ?>

    <?php // echo $form->field($model, 'NT_AdjIPAllow') ?>

    <?php // echo $form->field($model, 'NT_AdviserFee') ?>

    <?php // echo $form->field($model, 'NT_BackPay') ?>

    <?php // echo $form->field($model, 'NT_BackPayEFA') ?>

    <?php // echo $form->field($model, 'NT_BackPayCOLA') ?>

    <?php // echo $form->field($model, 'NT_BigClassPay') ?>

    <?php // echo $form->field($model, 'NT_CLPPay') ?>

    <?php // echo $form->field($model, 'NT_ClassOrgAdvs') ?>

    <?php // echo $form->field($model, 'NT_CommOutrchPay') ?>

    <?php // echo $form->field($model, 'NT_CommImmersion') ?>

    <?php // echo $form->field($model, 'NT_Coordi') ?>

    <?php // echo $form->field($model, 'NT_CompreExam') ?>

    <?php // echo $form->field($model, 'NT_CriticWork') ?>

    <?php // echo $form->field($model, 'NT_DentPreBoard') ?>

    <?php // echo $form->field($model, 'NT_DentALE') ?>

    <?php // echo $form->field($model, 'NT_Differential') ?>

    <?php // echo $form->field($model, 'NT_EnhcmtSeminar') ?>

    <?php // echo $form->field($model, 'NT_EnrAdvising') ?>

    <?php // echo $form->field($model, 'NT_ExpertisePrm') ?>

    <?php // echo $form->field($model, 'NT_ExtProgPay') ?>

    <?php // echo $form->field($model, 'NT_Externship') ?>

    <?php // echo $form->field($model, 'NT_Goodwill') ?>

    <?php // echo $form->field($model, 'NT_GratuityNTax') ?>

    <?php // echo $form->field($model, 'NT_GratuityTax') ?>

    <?php // echo $form->field($model, 'NT_HardshipPay') ?>

    <?php // echo $form->field($model, 'NT_HonorariumNF') ?>

    <?php // echo $form->field($model, 'NT_HosptOrient') ?>

    <?php // echo $form->field($model, 'NT_IncluProg') ?>

    <?php // echo $form->field($model, 'NT_IncentiveLP') ?>

    <?php // echo $form->field($model, 'NT_IncrmtlProceeds') ?>

    <?php // echo $form->field($model, 'NT_InternshipPay') ?>

    <?php // echo $form->field($model, 'NT_MaternityBnft') ?>

    <?php // echo $form->field($model, 'NT_OneTimeIncentive') ?>

    <?php // echo $form->field($model, 'NT_Practicum') ?>

    <?php // echo $form->field($model, 'NT_Proctorship') ?>

    <?php // echo $form->field($model, 'NT_ReviewNTax') ?>

    <?php // echo $form->field($model, 'NT_ReviewTax') ?>

    <?php // echo $form->field($model, 'NT_RICE') ?>

    <?php // echo $form->field($model, 'NT_SalarySHS') ?>

    <?php // echo $form->field($model, 'NT_SpclExam') ?>

    <?php // echo $form->field($model, 'NT_Substitution') ?>

    <?php // echo $form->field($model, 'NT_Training') ?>

    <?php // echo $form->field($model, 'NT_TranspoAllow') ?>

    <?php // echo $form->field($model, 'NT_Tutorial') ?>

    <?php // echo $form->field($model, 'NT_OINTax') ?>

    <?php // echo $form->field($model, 'NT_OINTaxRem') ?>

    <?php // echo $form->field($model, 'NT_OITax') ?>

    <?php // echo $form->field($model, 'NT_OITaxRem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
