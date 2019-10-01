<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Loans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'L_AdjSSS')->textInput() ?>

    <?= $form->field($model, 'L_PFSSS')->textInput() ?>

    <?= $form->field($model, 'L_HFSSS')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDSSS')->textInput() ?>

    <?= $form->field($model, 'L_SSS')->textInput() ?>

    <?= $form->field($model, 'L_AdjSSSC')->textInput() ?>

    <?= $form->field($model, 'L_PFSSSC')->textInput() ?>

    <?= $form->field($model, 'L_HFSSSC')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDSSSC')->textInput() ?>

    <?= $form->field($model, 'L_SSSC')->textInput() ?>

    <?= $form->field($model, 'L_AdjHDMF')->textInput() ?>

    <?= $form->field($model, 'L_PFHDMF')->textInput() ?>

    <?= $form->field($model, 'L_HFHDMF')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDHDMF')->textInput() ?>

    <?= $form->field($model, 'L_HDMF')->textInput() ?>

    <?= $form->field($model, 'L_AdjHDMFMP')->textInput() ?>

    <?= $form->field($model, 'L_PFHDMFMP')->textInput() ?>

    <?= $form->field($model, 'L_HFHDMFMP')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDHDMFMP')->textInput() ?>

    <?= $form->field($model, 'L_HDMFMP')->textInput() ?>

    <?= $form->field($model, 'L_AdjHDMFC')->textInput() ?>

    <?= $form->field($model, 'L_PFHDMFC')->textInput() ?>

    <?= $form->field($model, 'L_HFHDMFC')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDHDMFC')->textInput() ?>

    <?= $form->field($model, 'L_HDMFC')->textInput() ?>

    <?= $form->field($model, 'L_AdjLOVEMPP')->textInput() ?>

    <?= $form->field($model, 'L_PFLOVEMPP')->textInput() ?>

    <?= $form->field($model, 'L_HFLOVEMPP')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDLOVEMPP')->textInput() ?>

    <?= $form->field($model, 'L_LOVEMPP')->textInput() ?>

    <?= $form->field($model, 'L_AdjFAWU')->textInput() ?>

    <?= $form->field($model, 'L_PFFAWU')->textInput() ?>

    <?= $form->field($model, 'L_HFFAWU')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDFAWU')->textInput() ?>

    <?= $form->field($model, 'L_FAWU')->textInput() ?>

    <?= $form->field($model, 'L_AdjCEUHousingInt')->textInput() ?>

    <?= $form->field($model, 'L_PFCEUHousingInt')->textInput() ?>

    <?= $form->field($model, 'L_HFCEUHousingInt')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDCEUHousingInt')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingInt')->textInput() ?>

    <?= $form->field($model, 'L_AdjCEUHousingPcpl')->textInput() ?>

    <?= $form->field($model, 'L_PFCEUHousingPcpl')->textInput() ?>

    <?= $form->field($model, 'L_HFCEUHousingPcpl')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDCEUHousingPcpl')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingPcpl')->textInput() ?>

    <?= $form->field($model, 'L_AdjMedical')->textInput() ?>

    <?= $form->field($model, 'L_PFMedical')->textInput() ?>

    <?= $form->field($model, 'L_HFMedical')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDMedical')->textInput() ?>

    <?= $form->field($model, 'L_Medical')->textInput() ?>

    <?= $form->field($model, 'L_AdjTechnology')->textInput() ?>

    <?= $form->field($model, 'L_PFTechnology')->textInput() ?>

    <?= $form->field($model, 'L_HFTechnology')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDTechnology')->textInput() ?>

    <?= $form->field($model, 'L_Technology')->textInput() ?>

    <?= $form->field($model, 'L_AdjHospital')->textInput() ?>

    <?= $form->field($model, 'L_PFHospital')->textInput() ?>

    <?= $form->field($model, 'L_HFHospital')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDHospital')->textInput() ?>

    <?= $form->field($model, 'L_Hospital')->textInput() ?>

    <?= $form->field($model, 'L_AdjEmergency')->textInput() ?>

    <?= $form->field($model, 'L_PFEmergency')->textInput() ?>

    <?= $form->field($model, 'L_HFEmergency')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDEmergency')->textInput() ?>

    <?= $form->field($model, 'L_Emergency')->textInput() ?>

    <?= $form->field($model, 'L_AdjUnified')->textInput() ?>

    <?= $form->field($model, 'L_PFUnified')->textInput() ?>

    <?= $form->field($model, 'L_HFUnified')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDUnified')->textInput() ?>

    <?= $form->field($model, 'L_Unified')->textInput() ?>

    <?= $form->field($model, 'L_AdjBDay')->textInput() ?>

    <?= $form->field($model, 'L_PFBDay')->textInput() ?>

    <?= $form->field($model, 'L_HFBDay')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDBDay')->textInput() ?>

    <?= $form->field($model, 'L_BDay')->textInput() ?>

    <?= $form->field($model, 'L_AdjTravel')->textInput() ?>

    <?= $form->field($model, 'L_PFTravel')->textInput() ?>

    <?= $form->field($model, 'L_HFTravel')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDTravel')->textInput() ?>

    <?= $form->field($model, 'L_Travel')->textInput() ?>

    <?= $form->field($model, 'L_AdjPettyCash')->textInput() ?>

    <?= $form->field($model, 'L_PFPettyCash')->textInput() ?>

    <?= $form->field($model, 'L_HFPettyCash')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDPettyCash')->textInput() ?>

    <?= $form->field($model, 'L_PettyCash')->textInput() ?>

    <?= $form->field($model, 'L_AdjSpecial')->textInput() ?>

    <?= $form->field($model, 'L_PFSpecial')->textInput() ?>

    <?= $form->field($model, 'L_HFSpecial')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDSpecial')->textInput() ?>

    <?= $form->field($model, 'L_Special')->textInput() ?>

    <?= $form->field($model, 'L_AdjPhilamcare')->textInput() ?>

    <?= $form->field($model, 'L_PFPhilamcare')->textInput() ?>

    <?= $form->field($model, 'L_HFPhilamcare')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDPhilamcare')->textInput() ?>

    <?= $form->field($model, 'L_Philamcare')->textInput() ?>

    <?= $form->field($model, 'L_AdjSavingsDep')->textInput() ?>

    <?= $form->field($model, 'L_PFSavingsDep')->textInput() ?>

    <?= $form->field($model, 'L_HFSavingsDep')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDSavingsDep')->textInput() ?>

    <?= $form->field($model, 'L_SavingsDep')->textInput() ?>

    <?= $form->field($model, 'L_AdjFixedDep')->textInput() ?>

    <?= $form->field($model, 'L_PFFixedDep')->textInput() ?>

    <?= $form->field($model, 'L_HFFixedDep')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDFixedDep')->textInput() ?>

    <?= $form->field($model, 'L_FixedDep')->textInput() ?>

    <?= $form->field($model, 'L_AdjPensionDep')->textInput() ?>

    <?= $form->field($model, 'L_PFPensionDep')->textInput() ?>

    <?= $form->field($model, 'L_HFPensionDep')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDPensionDep')->textInput() ?>

    <?= $form->field($model, 'L_PensionDep')->textInput() ?>

    <?= $form->field($model, 'L_AdjSeminar')->textInput() ?>

    <?= $form->field($model, 'L_PFSeminar')->textInput() ?>

    <?= $form->field($model, 'L_HFSeminar')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDSeminar')->textInput() ?>

    <?= $form->field($model, 'L_Seminar')->textInput() ?>

    <?= $form->field($model, 'L_AdjCoop')->textInput() ?>

    <?= $form->field($model, 'L_PFCoop')->textInput() ?>

    <?= $form->field($model, 'L_HFCoop')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDCoop')->textInput() ?>

    <?= $form->field($model, 'L_Coop')->textInput() ?>

    <?= $form->field($model, 'L_AdjTuition')->textInput() ?>

    <?= $form->field($model, 'L_PFTuition')->textInput() ?>

    <?= $form->field($model, 'L_HFTuition')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDTuition')->textInput() ?>

    <?= $form->field($model, 'L_Tuition')->textInput() ?>

    <?= $form->field($model, 'L_AdjFieldTrip')->textInput() ?>

    <?= $form->field($model, 'L_PFFieldTrip')->textInput() ?>

    <?= $form->field($model, 'L_HFFieldTrip')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDFieldTrip')->textInput() ?>

    <?= $form->field($model, 'L_FieldTrip')->textInput() ?>

    <?= $form->field($model, 'L_AdjCCLove')->textInput() ?>

    <?= $form->field($model, 'L_PFCCLove')->textInput() ?>

    <?= $form->field($model, 'L_HFCCLove')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDCCLove')->textInput() ?>

    <?= $form->field($model, 'L_CCLove')->textInput() ?>

    <?= $form->field($model, 'L_AdjEuroUSAInt')->textInput() ?>

    <?= $form->field($model, 'L_PFEuroUSAInt')->textInput() ?>

    <?= $form->field($model, 'L_HFEuroUSAInt')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDEuroUSAInt')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAInt')->textInput() ?>

    <?= $form->field($model, 'L_AdjEuroUSAPcpl')->textInput() ?>

    <?= $form->field($model, 'L_PFEuroUSAPcpl')->textInput() ?>

    <?= $form->field($model, 'L_HFEuroUSAPcpl')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDEuroUSAPcpl')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAPcpl')->textInput() ?>

    <?= $form->field($model, 'L_AdjHolyLandTour')->textInput() ?>

    <?= $form->field($model, 'L_PFHolyLandTour')->textInput() ?>

    <?= $form->field($model, 'L_HFHolyLandTour')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDHolyLandTour')->textInput() ?>

    <?= $form->field($model, 'L_HolyLandTour')->textInput() ?>

    <?= $form->field($model, 'L_AdjHKTravel')->textInput() ?>

    <?= $form->field($model, 'L_PFHKTravel')->textInput() ?>

    <?= $form->field($model, 'L_HFHKTravel')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDHKTravel')->textInput() ?>

    <?= $form->field($model, 'L_HKTravel')->textInput() ?>

    <?= $form->field($model, 'L_AdjPAFTETour')->textInput() ?>

    <?= $form->field($model, 'L_PFPAFTETour')->textInput() ?>

    <?= $form->field($model, 'L_HFPAFTETour')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDPAFTETour')->textInput() ?>

    <?= $form->field($model, 'L_PAFTETour')->textInput() ?>

    <?= $form->field($model, 'L_AdjAsiaPacConfe')->textInput() ?>

    <?= $form->field($model, 'L_PFAsiaPacConfe')->textInput() ?>

    <?= $form->field($model, 'L_HFAsiaPacConfe')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDAsiaPacConfe')->textInput() ?>

    <?= $form->field($model, 'L_AsiaPacConfe')->textInput() ?>

    <?= $form->field($model, 'L_AdjParking')->textInput() ?>

    <?= $form->field($model, 'L_PFParking')->textInput() ?>

    <?= $form->field($model, 'L_HFParking')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDParking')->textInput() ?>

    <?= $form->field($model, 'L_Parking')->textInput() ?>

    <?= $form->field($model, 'L_AdjComputer')->textInput() ?>

    <?= $form->field($model, 'L_PFComputer')->textInput() ?>

    <?= $form->field($model, 'L_HFComputer')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDComputer')->textInput() ?>

    <?= $form->field($model, 'L_Computer')->textInput() ?>

    <?= $form->field($model, 'L_AdjOPBasic')->textInput() ?>

    <?= $form->field($model, 'L_PFOPBasic')->textInput() ?>

    <?= $form->field($model, 'L_HFOPBasic')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDOPBasic')->textInput() ?>

    <?= $form->field($model, 'L_OPBasic')->textInput() ?>

    <?= $form->field($model, 'L_AdjOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_PFOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_HFOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_OPEFA')->textInput() ?>

    <?= $form->field($model, 'L_AdjOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_PFOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_HFOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_OPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_AdjAdjTax')->textInput() ?>

    <?= $form->field($model, 'L_PFAdjTax')->textInput() ?>

    <?= $form->field($model, 'L_HFAdjTax')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDAdjTax')->textInput() ?>

    <?= $form->field($model, 'L_AdjTax')->textInput() ?>

    <?= $form->field($model, 'L_AdjAdjTaxSB')->textInput() ?>

    <?= $form->field($model, 'L_PFAdjTaxSB')->textInput() ?>

    <?= $form->field($model, 'L_HFAdjTaxSB')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDAdjTaxSB')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxSB')->textInput() ?>

    <?= $form->field($model, 'L_AdjALWOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_PFALWOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_HFALWOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDALWOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_AdjALWOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_PFALWOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_HFALWOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDALWOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_AdjVaccine')->textInput() ?>

    <?= $form->field($model, 'L_PFVaccine')->textInput() ?>

    <?= $form->field($model, 'L_HFVaccine')->textInput() ?>

    <?= $form->field($model, 'L_AdtnlDVaccine')->textInput() ?>

    <?= $form->field($model, 'L_Vaccine')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
