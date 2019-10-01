<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NtOtherIncome */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-other-income-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NT_AdvIP')->textInput() ?>

    <?= $form->field($model, 'NT_HazardPay')->textInput() ?>

    <?= $form->field($model, 'NT_Honorarium')->textInput() ?>

    <?= $form->field($model, 'NT_HRMAllowNTax')->textInput() ?>

    <?= $form->field($model, 'NT_HRMAllowTax')->textInput() ?>

    <?= $form->field($model, 'NT_IPAllow')->textInput() ?>

    <?= $form->field($model, 'NT_RLEAllowNTax')->textInput() ?>

    <?= $form->field($model, 'NT_RLEAllowTax')->textInput() ?>

    <?= $form->field($model, 'NT_RFDAlumniTick')->textInput() ?>

    <?= $form->field($model, 'NT_RFDCCLoan')->textInput() ?>

    <?= $form->field($model, 'NT_RFDCOOP')->textInput() ?>

    <?= $form->field($model, 'NT_RFDFAWU')->textInput() ?>

    <?= $form->field($model, 'NT_RFDHDMFMPL')->textInput() ?>

    <?= $form->field($model, 'NT_RFDHDMFP')->textInput() ?>

    <?= $form->field($model, 'NT_RFDHDMFU')->textInput() ?>

    <?= $form->field($model, 'NT_RFDHF')->textInput() ?>

    <?= $form->field($model, 'NT_RFDMedicare')->textInput() ?>

    <?= $form->field($model, 'NT_RFDPHIC')->textInput() ?>

    <?= $form->field($model, 'NT_RFDSSSCondo')->textInput() ?>

    <?= $form->field($model, 'NT_RFDSSSL')->textInput() ?>

    <?= $form->field($model, 'NT_RFDSSSP')->textInput() ?>

    <?= $form->field($model, 'NT_RFDTax')->textInput() ?>

    <?= $form->field($model, 'NT_RFDTaxAdv')->textInput() ?>

    <?= $form->field($model, 'NT_RFDTF')->textInput() ?>

    <?= $form->field($model, 'NT_RFDOthers')->textInput() ?>

    <?= $form->field($model, 'NT_RFDOthersRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NT_BNMidYrNTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNMidYrTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNSLVLNTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNSLVLTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNTMPNTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNTMPTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNXmasNTax')->textInput() ?>

    <?= $form->field($model, 'NT_BNXmasTax')->textInput() ?>

    <?= $form->field($model, 'NT_SHSBNTMPNTax')->textInput() ?>

    <?= $form->field($model, 'NT_SHSBNTMPTax')->textInput() ?>

    <?= $form->field($model, 'NT_SSBNMidYrTax')->textInput() ?>

    <?= $form->field($model, 'NT_SSBNSLVLTax')->textInput() ?>

    <?= $form->field($model, 'NT_SSBNTMPTax')->textInput() ?>

    <?= $form->field($model, 'NT_SSBNXmasTax')->textInput() ?>

    <?= $form->field($model, 'NT_BonusNTax')->textInput() ?>

    <?= $form->field($model, 'NT_BonusTax')->textInput() ?>

    <?= $form->field($model, 'NT_AdjIPAllow')->textInput() ?>

    <?= $form->field($model, 'NT_AdviserFee')->textInput() ?>

    <?= $form->field($model, 'NT_BackPay')->textInput() ?>

    <?= $form->field($model, 'NT_BackPayEFA')->textInput() ?>

    <?= $form->field($model, 'NT_BackPayCOLA')->textInput() ?>

    <?= $form->field($model, 'NT_BigClassPay')->textInput() ?>

    <?= $form->field($model, 'NT_CLPPay')->textInput() ?>

    <?= $form->field($model, 'NT_ClassOrgAdvs')->textInput() ?>

    <?= $form->field($model, 'NT_CommOutrchPay')->textInput() ?>

    <?= $form->field($model, 'NT_CommImmersion')->textInput() ?>

    <?= $form->field($model, 'NT_Coordi')->textInput() ?>

    <?= $form->field($model, 'NT_CompreExam')->textInput() ?>

    <?= $form->field($model, 'NT_CriticWork')->textInput() ?>

    <?= $form->field($model, 'NT_DentPreBoard')->textInput() ?>

    <?= $form->field($model, 'NT_DentALE')->textInput() ?>

    <?= $form->field($model, 'NT_Differential')->textInput() ?>

    <?= $form->field($model, 'NT_EnhcmtSeminar')->textInput() ?>

    <?= $form->field($model, 'NT_EnrAdvising')->textInput() ?>

    <?= $form->field($model, 'NT_ExpertisePrm')->textInput() ?>

    <?= $form->field($model, 'NT_ExtProgPay')->textInput() ?>

    <?= $form->field($model, 'NT_Externship')->textInput() ?>

    <?= $form->field($model, 'NT_Goodwill')->textInput() ?>

    <?= $form->field($model, 'NT_GratuityNTax')->textInput() ?>

    <?= $form->field($model, 'NT_GratuityTax')->textInput() ?>

    <?= $form->field($model, 'NT_HardshipPay')->textInput() ?>

    <?= $form->field($model, 'NT_HonorariumNF')->textInput() ?>

    <?= $form->field($model, 'NT_HosptOrient')->textInput() ?>

    <?= $form->field($model, 'NT_IncluProg')->textInput() ?>

    <?= $form->field($model, 'NT_IncentiveLP')->textInput() ?>

    <?= $form->field($model, 'NT_IncrmtlProceeds')->textInput() ?>

    <?= $form->field($model, 'NT_InternshipPay')->textInput() ?>

    <?= $form->field($model, 'NT_MaternityBnft')->textInput() ?>

    <?= $form->field($model, 'NT_OneTimeIncentive')->textInput() ?>

    <?= $form->field($model, 'NT_Practicum')->textInput() ?>

    <?= $form->field($model, 'NT_Proctorship')->textInput() ?>

    <?= $form->field($model, 'NT_ReviewNTax')->textInput() ?>

    <?= $form->field($model, 'NT_ReviewTax')->textInput() ?>

    <?= $form->field($model, 'NT_RICE')->textInput() ?>

    <?= $form->field($model, 'NT_SalarySHS')->textInput() ?>

    <?= $form->field($model, 'NT_SpclExam')->textInput() ?>

    <?= $form->field($model, 'NT_Substitution')->textInput() ?>

    <?= $form->field($model, 'NT_Training')->textInput() ?>

    <?= $form->field($model, 'NT_TranspoAllow')->textInput() ?>

    <?= $form->field($model, 'NT_Tutorial')->textInput() ?>

    <?= $form->field($model, 'NT_OINTax')->textInput() ?>

    <?= $form->field($model, 'NT_OINTaxRem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NT_OITax')->textInput() ?>

    <?= $form->field($model, 'NT_OITaxRem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
