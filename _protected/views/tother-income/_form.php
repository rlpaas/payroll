<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TotherIncome */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tother-income-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TC_AdvIP')->textInput() ?>

    <?= $form->field($model, 'TC_HazardPay')->textInput() ?>

    <?= $form->field($model, 'TC_Honorarium')->textInput() ?>

    <?= $form->field($model, 'TC_HRMAllowNTax')->textInput() ?>

    <?= $form->field($model, 'TC_HRMAllowTax')->textInput() ?>

    <?= $form->field($model, 'TC_IPAllow')->textInput() ?>

    <?= $form->field($model, 'TC_RLEAllowNTax')->textInput() ?>

    <?= $form->field($model, 'TC_RLEAllowTax')->textInput() ?>

    <?= $form->field($model, 'TC_RFDAlumniTick')->textInput() ?>

    <?= $form->field($model, 'TC_RFDCCLoan')->textInput() ?>

    <?= $form->field($model, 'TC_RFDCOOP')->textInput() ?>

    <?= $form->field($model, 'TC_RFDFAWU')->textInput() ?>

    <?= $form->field($model, 'TC_RFDHDMFMPL')->textInput() ?>

    <?= $form->field($model, 'TC_RFDHDMFP')->textInput() ?>

    <?= $form->field($model, 'TC_RFDHDMFU')->textInput() ?>

    <?= $form->field($model, 'TC_RFDHF')->textInput() ?>

    <?= $form->field($model, 'TC_RFDMedicare')->textInput() ?>

    <?= $form->field($model, 'TC_RFDPHIC')->textInput() ?>

    <?= $form->field($model, 'TC_RFDSSSCondo')->textInput() ?>

    <?= $form->field($model, 'TC_RFDSSSL')->textInput() ?>

    <?= $form->field($model, 'TC_RFDSSSP')->textInput() ?>

    <?= $form->field($model, 'TC_RFDTax')->textInput() ?>

    <?= $form->field($model, 'TC_RFDTaxAdv')->textInput() ?>

    <?= $form->field($model, 'TC_RFDTF')->textInput() ?>

    <?= $form->field($model, 'TC_RFDOthers')->textInput() ?>

    <?= $form->field($model, 'TC_RFDOthersRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TC_BNMidYrNTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNMidYrTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNSLVLNTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNSLVLTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNTMPNTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNTMPTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNXmasNTax')->textInput() ?>

    <?= $form->field($model, 'TC_BNXmasTax')->textInput() ?>

    <?= $form->field($model, 'TC_SHSBNTMPNTax')->textInput() ?>

    <?= $form->field($model, 'TC_SHSBNTMPTax')->textInput() ?>

    <?= $form->field($model, 'TC_SSBNMidYrTax')->textInput() ?>

    <?= $form->field($model, 'TC_SSBNSLVLTax')->textInput() ?>

    <?= $form->field($model, 'TC_SSBNTMPTax')->textInput() ?>

    <?= $form->field($model, 'TC_SSBNXmasTax')->textInput() ?>

    <?= $form->field($model, 'TC_BonusNTax')->textInput() ?>

    <?= $form->field($model, 'TC_BonusTax')->textInput() ?>

    <?= $form->field($model, 'TC_AdjIPAllow')->textInput() ?>

    <?= $form->field($model, 'TC_AdviserFee')->textInput() ?>

    <?= $form->field($model, 'TC_BackPay')->textInput() ?>

    <?= $form->field($model, 'TC_BackPayEFA')->textInput() ?>

    <?= $form->field($model, 'TC_BackPayCOLA')->textInput() ?>

    <?= $form->field($model, 'TC_BigClassPay')->textInput() ?>

    <?= $form->field($model, 'TC_CLPPay')->textInput() ?>

    <?= $form->field($model, 'TC_ClassOrgAdvs')->textInput() ?>

    <?= $form->field($model, 'TC_CommOutrchPay')->textInput() ?>

    <?= $form->field($model, 'TC_CommImmersion')->textInput() ?>

    <?= $form->field($model, 'TC_Coordi')->textInput() ?>

    <?= $form->field($model, 'TC_CompreExam')->textInput() ?>

    <?= $form->field($model, 'TC_CriticWork')->textInput() ?>

    <?= $form->field($model, 'TC_DentPreBoard')->textInput() ?>

    <?= $form->field($model, 'TC_DentALE')->textInput() ?>

    <?= $form->field($model, 'TC_Differential')->textInput() ?>

    <?= $form->field($model, 'TC_EnhcmtSeminar')->textInput() ?>

    <?= $form->field($model, 'TC_EnrAdvising')->textInput() ?>

    <?= $form->field($model, 'TC_ExpertisePrm')->textInput() ?>

    <?= $form->field($model, 'TC_ExtProgPay')->textInput() ?>

    <?= $form->field($model, 'TC_Externship')->textInput() ?>

    <?= $form->field($model, 'TC_Goodwill')->textInput() ?>

    <?= $form->field($model, 'TC_GratuityNTax')->textInput() ?>

    <?= $form->field($model, 'TC_GratuityTax')->textInput() ?>

    <?= $form->field($model, 'TC_HardshipPay')->textInput() ?>

    <?= $form->field($model, 'TC_HolidayPay')->textInput() ?>

    <?= $form->field($model, 'TC_HonorariumNF')->textInput() ?>

    <?= $form->field($model, 'TC_HosptOrient')->textInput() ?>

    <?= $form->field($model, 'TC_IncluProg')->textInput() ?>

    <?= $form->field($model, 'TC_IncentiveLP')->textInput() ?>

    <?= $form->field($model, 'TC_IncrmtlProceeds')->textInput() ?>

    <?= $form->field($model, 'TC_InternshipPay')->textInput() ?>

    <?= $form->field($model, 'TC_MaternityBnft')->textInput() ?>

    <?= $form->field($model, 'TC_OneTimeIncentive')->textInput() ?>

    <?= $form->field($model, 'TC_Practicum')->textInput() ?>

    <?= $form->field($model, 'TC_Proctorship')->textInput() ?>

    <?= $form->field($model, 'TC_ReviewNTax')->textInput() ?>

    <?= $form->field($model, 'TC_ReviewTax')->textInput() ?>

    <?= $form->field($model, 'TC_RICE')->textInput() ?>

    <?= $form->field($model, 'TC_SalarySHS')->textInput() ?>

    <?= $form->field($model, 'TC_SpclExam')->textInput() ?>

    <?= $form->field($model, 'TC_Substitution')->textInput() ?>

    <?= $form->field($model, 'TC_Training')->textInput() ?>

    <?= $form->field($model, 'TC_TranspoAllow')->textInput() ?>

    <?= $form->field($model, 'TC_Tutorial')->textInput() ?>

    <?= $form->field($model, 'TC_OINTax')->textInput() ?>

    <?= $form->field($model, 'TC_OINTaxRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TC_OITax')->textInput() ?>

    <?= $form->field($model, 'TC_OITaxRem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
