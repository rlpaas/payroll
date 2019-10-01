<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\LoansSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loans-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'L_AdjSSS') ?>

    <?= $form->field($model, 'L_PFSSS') ?>

    <?= $form->field($model, 'L_HFSSS') ?>

    <?php // echo $form->field($model, 'L_AdtnlDSSS') ?>

    <?php // echo $form->field($model, 'L_SSS') ?>

    <?php // echo $form->field($model, 'L_AdjSSSC') ?>

    <?php // echo $form->field($model, 'L_PFSSSC') ?>

    <?php // echo $form->field($model, 'L_HFSSSC') ?>

    <?php // echo $form->field($model, 'L_AdtnlDSSSC') ?>

    <?php // echo $form->field($model, 'L_SSSC') ?>

    <?php // echo $form->field($model, 'L_AdjHDMF') ?>

    <?php // echo $form->field($model, 'L_PFHDMF') ?>

    <?php // echo $form->field($model, 'L_HFHDMF') ?>

    <?php // echo $form->field($model, 'L_AdtnlDHDMF') ?>

    <?php // echo $form->field($model, 'L_HDMF') ?>

    <?php // echo $form->field($model, 'L_AdjHDMFMP') ?>

    <?php // echo $form->field($model, 'L_PFHDMFMP') ?>

    <?php // echo $form->field($model, 'L_HFHDMFMP') ?>

    <?php // echo $form->field($model, 'L_AdtnlDHDMFMP') ?>

    <?php // echo $form->field($model, 'L_HDMFMP') ?>

    <?php // echo $form->field($model, 'L_AdjHDMFC') ?>

    <?php // echo $form->field($model, 'L_PFHDMFC') ?>

    <?php // echo $form->field($model, 'L_HFHDMFC') ?>

    <?php // echo $form->field($model, 'L_AdtnlDHDMFC') ?>

    <?php // echo $form->field($model, 'L_HDMFC') ?>

    <?php // echo $form->field($model, 'L_AdjLOVEMPP') ?>

    <?php // echo $form->field($model, 'L_PFLOVEMPP') ?>

    <?php // echo $form->field($model, 'L_HFLOVEMPP') ?>

    <?php // echo $form->field($model, 'L_AdtnlDLOVEMPP') ?>

    <?php // echo $form->field($model, 'L_LOVEMPP') ?>

    <?php // echo $form->field($model, 'L_AdjFAWU') ?>

    <?php // echo $form->field($model, 'L_PFFAWU') ?>

    <?php // echo $form->field($model, 'L_HFFAWU') ?>

    <?php // echo $form->field($model, 'L_AdtnlDFAWU') ?>

    <?php // echo $form->field($model, 'L_FAWU') ?>

    <?php // echo $form->field($model, 'L_AdjCEUHousingInt') ?>

    <?php // echo $form->field($model, 'L_PFCEUHousingInt') ?>

    <?php // echo $form->field($model, 'L_HFCEUHousingInt') ?>

    <?php // echo $form->field($model, 'L_AdtnlDCEUHousingInt') ?>

    <?php // echo $form->field($model, 'L_CEUHousingInt') ?>

    <?php // echo $form->field($model, 'L_AdjCEUHousingPcpl') ?>

    <?php // echo $form->field($model, 'L_PFCEUHousingPcpl') ?>

    <?php // echo $form->field($model, 'L_HFCEUHousingPcpl') ?>

    <?php // echo $form->field($model, 'L_AdtnlDCEUHousingPcpl') ?>

    <?php // echo $form->field($model, 'L_CEUHousingPcpl') ?>

    <?php // echo $form->field($model, 'L_AdjMedical') ?>

    <?php // echo $form->field($model, 'L_PFMedical') ?>

    <?php // echo $form->field($model, 'L_HFMedical') ?>

    <?php // echo $form->field($model, 'L_AdtnlDMedical') ?>

    <?php // echo $form->field($model, 'L_Medical') ?>

    <?php // echo $form->field($model, 'L_AdjTechnology') ?>

    <?php // echo $form->field($model, 'L_PFTechnology') ?>

    <?php // echo $form->field($model, 'L_HFTechnology') ?>

    <?php // echo $form->field($model, 'L_AdtnlDTechnology') ?>

    <?php // echo $form->field($model, 'L_Technology') ?>

    <?php // echo $form->field($model, 'L_AdjHospital') ?>

    <?php // echo $form->field($model, 'L_PFHospital') ?>

    <?php // echo $form->field($model, 'L_HFHospital') ?>

    <?php // echo $form->field($model, 'L_AdtnlDHospital') ?>

    <?php // echo $form->field($model, 'L_Hospital') ?>

    <?php // echo $form->field($model, 'L_AdjEmergency') ?>

    <?php // echo $form->field($model, 'L_PFEmergency') ?>

    <?php // echo $form->field($model, 'L_HFEmergency') ?>

    <?php // echo $form->field($model, 'L_AdtnlDEmergency') ?>

    <?php // echo $form->field($model, 'L_Emergency') ?>

    <?php // echo $form->field($model, 'L_AdjUnified') ?>

    <?php // echo $form->field($model, 'L_PFUnified') ?>

    <?php // echo $form->field($model, 'L_HFUnified') ?>

    <?php // echo $form->field($model, 'L_AdtnlDUnified') ?>

    <?php // echo $form->field($model, 'L_Unified') ?>

    <?php // echo $form->field($model, 'L_AdjBDay') ?>

    <?php // echo $form->field($model, 'L_PFBDay') ?>

    <?php // echo $form->field($model, 'L_HFBDay') ?>

    <?php // echo $form->field($model, 'L_AdtnlDBDay') ?>

    <?php // echo $form->field($model, 'L_BDay') ?>

    <?php // echo $form->field($model, 'L_AdjTravel') ?>

    <?php // echo $form->field($model, 'L_PFTravel') ?>

    <?php // echo $form->field($model, 'L_HFTravel') ?>

    <?php // echo $form->field($model, 'L_AdtnlDTravel') ?>

    <?php // echo $form->field($model, 'L_Travel') ?>

    <?php // echo $form->field($model, 'L_AdjPettyCash') ?>

    <?php // echo $form->field($model, 'L_PFPettyCash') ?>

    <?php // echo $form->field($model, 'L_HFPettyCash') ?>

    <?php // echo $form->field($model, 'L_AdtnlDPettyCash') ?>

    <?php // echo $form->field($model, 'L_PettyCash') ?>

    <?php // echo $form->field($model, 'L_AdjSpecial') ?>

    <?php // echo $form->field($model, 'L_PFSpecial') ?>

    <?php // echo $form->field($model, 'L_HFSpecial') ?>

    <?php // echo $form->field($model, 'L_AdtnlDSpecial') ?>

    <?php // echo $form->field($model, 'L_Special') ?>

    <?php // echo $form->field($model, 'L_AdjPhilamcare') ?>

    <?php // echo $form->field($model, 'L_PFPhilamcare') ?>

    <?php // echo $form->field($model, 'L_HFPhilamcare') ?>

    <?php // echo $form->field($model, 'L_AdtnlDPhilamcare') ?>

    <?php // echo $form->field($model, 'L_Philamcare') ?>

    <?php // echo $form->field($model, 'L_AdjSavingsDep') ?>

    <?php // echo $form->field($model, 'L_PFSavingsDep') ?>

    <?php // echo $form->field($model, 'L_HFSavingsDep') ?>

    <?php // echo $form->field($model, 'L_AdtnlDSavingsDep') ?>

    <?php // echo $form->field($model, 'L_SavingsDep') ?>

    <?php // echo $form->field($model, 'L_AdjFixedDep') ?>

    <?php // echo $form->field($model, 'L_PFFixedDep') ?>

    <?php // echo $form->field($model, 'L_HFFixedDep') ?>

    <?php // echo $form->field($model, 'L_AdtnlDFixedDep') ?>

    <?php // echo $form->field($model, 'L_FixedDep') ?>

    <?php // echo $form->field($model, 'L_AdjPensionDep') ?>

    <?php // echo $form->field($model, 'L_PFPensionDep') ?>

    <?php // echo $form->field($model, 'L_HFPensionDep') ?>

    <?php // echo $form->field($model, 'L_AdtnlDPensionDep') ?>

    <?php // echo $form->field($model, 'L_PensionDep') ?>

    <?php // echo $form->field($model, 'L_AdjSeminar') ?>

    <?php // echo $form->field($model, 'L_PFSeminar') ?>

    <?php // echo $form->field($model, 'L_HFSeminar') ?>

    <?php // echo $form->field($model, 'L_AdtnlDSeminar') ?>

    <?php // echo $form->field($model, 'L_Seminar') ?>

    <?php // echo $form->field($model, 'L_AdjCoop') ?>

    <?php // echo $form->field($model, 'L_PFCoop') ?>

    <?php // echo $form->field($model, 'L_HFCoop') ?>

    <?php // echo $form->field($model, 'L_AdtnlDCoop') ?>

    <?php // echo $form->field($model, 'L_Coop') ?>

    <?php // echo $form->field($model, 'L_AdjTuition') ?>

    <?php // echo $form->field($model, 'L_PFTuition') ?>

    <?php // echo $form->field($model, 'L_HFTuition') ?>

    <?php // echo $form->field($model, 'L_AdtnlDTuition') ?>

    <?php // echo $form->field($model, 'L_Tuition') ?>

    <?php // echo $form->field($model, 'L_AdjFieldTrip') ?>

    <?php // echo $form->field($model, 'L_PFFieldTrip') ?>

    <?php // echo $form->field($model, 'L_HFFieldTrip') ?>

    <?php // echo $form->field($model, 'L_AdtnlDFieldTrip') ?>

    <?php // echo $form->field($model, 'L_FieldTrip') ?>

    <?php // echo $form->field($model, 'L_AdjCCLove') ?>

    <?php // echo $form->field($model, 'L_PFCCLove') ?>

    <?php // echo $form->field($model, 'L_HFCCLove') ?>

    <?php // echo $form->field($model, 'L_AdtnlDCCLove') ?>

    <?php // echo $form->field($model, 'L_CCLove') ?>

    <?php // echo $form->field($model, 'L_AdjEuroUSAInt') ?>

    <?php // echo $form->field($model, 'L_PFEuroUSAInt') ?>

    <?php // echo $form->field($model, 'L_HFEuroUSAInt') ?>

    <?php // echo $form->field($model, 'L_AdtnlDEuroUSAInt') ?>

    <?php // echo $form->field($model, 'L_EuroUSAInt') ?>

    <?php // echo $form->field($model, 'L_AdjEuroUSAPcpl') ?>

    <?php // echo $form->field($model, 'L_PFEuroUSAPcpl') ?>

    <?php // echo $form->field($model, 'L_HFEuroUSAPcpl') ?>

    <?php // echo $form->field($model, 'L_AdtnlDEuroUSAPcpl') ?>

    <?php // echo $form->field($model, 'L_EuroUSAPcpl') ?>

    <?php // echo $form->field($model, 'L_AdjHolyLandTour') ?>

    <?php // echo $form->field($model, 'L_PFHolyLandTour') ?>

    <?php // echo $form->field($model, 'L_HFHolyLandTour') ?>

    <?php // echo $form->field($model, 'L_AdtnlDHolyLandTour') ?>

    <?php // echo $form->field($model, 'L_HolyLandTour') ?>

    <?php // echo $form->field($model, 'L_AdjHKTravel') ?>

    <?php // echo $form->field($model, 'L_PFHKTravel') ?>

    <?php // echo $form->field($model, 'L_HFHKTravel') ?>

    <?php // echo $form->field($model, 'L_AdtnlDHKTravel') ?>

    <?php // echo $form->field($model, 'L_HKTravel') ?>

    <?php // echo $form->field($model, 'L_AdjPAFTETour') ?>

    <?php // echo $form->field($model, 'L_PFPAFTETour') ?>

    <?php // echo $form->field($model, 'L_HFPAFTETour') ?>

    <?php // echo $form->field($model, 'L_AdtnlDPAFTETour') ?>

    <?php // echo $form->field($model, 'L_PAFTETour') ?>

    <?php // echo $form->field($model, 'L_AdjAsiaPacConfe') ?>

    <?php // echo $form->field($model, 'L_PFAsiaPacConfe') ?>

    <?php // echo $form->field($model, 'L_HFAsiaPacConfe') ?>

    <?php // echo $form->field($model, 'L_AdtnlDAsiaPacConfe') ?>

    <?php // echo $form->field($model, 'L_AsiaPacConfe') ?>

    <?php // echo $form->field($model, 'L_AdjParking') ?>

    <?php // echo $form->field($model, 'L_PFParking') ?>

    <?php // echo $form->field($model, 'L_HFParking') ?>

    <?php // echo $form->field($model, 'L_AdtnlDParking') ?>

    <?php // echo $form->field($model, 'L_Parking') ?>

    <?php // echo $form->field($model, 'L_AdjComputer') ?>

    <?php // echo $form->field($model, 'L_PFComputer') ?>

    <?php // echo $form->field($model, 'L_HFComputer') ?>

    <?php // echo $form->field($model, 'L_AdtnlDComputer') ?>

    <?php // echo $form->field($model, 'L_Computer') ?>

    <?php // echo $form->field($model, 'L_AdjOPBasic') ?>

    <?php // echo $form->field($model, 'L_PFOPBasic') ?>

    <?php // echo $form->field($model, 'L_HFOPBasic') ?>

    <?php // echo $form->field($model, 'L_AdtnlDOPBasic') ?>

    <?php // echo $form->field($model, 'L_OPBasic') ?>

    <?php // echo $form->field($model, 'L_AdjOPEFA') ?>

    <?php // echo $form->field($model, 'L_PFOPEFA') ?>

    <?php // echo $form->field($model, 'L_HFOPEFA') ?>

    <?php // echo $form->field($model, 'L_AdtnlDOPEFA') ?>

    <?php // echo $form->field($model, 'L_OPEFA') ?>

    <?php // echo $form->field($model, 'L_AdjOPCOLA') ?>

    <?php // echo $form->field($model, 'L_PFOPCOLA') ?>

    <?php // echo $form->field($model, 'L_HFOPCOLA') ?>

    <?php // echo $form->field($model, 'L_AdtnlDOPCOLA') ?>

    <?php // echo $form->field($model, 'L_OPCOLA') ?>

    <?php // echo $form->field($model, 'L_AdjAdjTax') ?>

    <?php // echo $form->field($model, 'L_PFAdjTax') ?>

    <?php // echo $form->field($model, 'L_HFAdjTax') ?>

    <?php // echo $form->field($model, 'L_AdtnlDAdjTax') ?>

    <?php // echo $form->field($model, 'L_AdjTax') ?>

    <?php // echo $form->field($model, 'L_AdjAdjTaxSB') ?>

    <?php // echo $form->field($model, 'L_PFAdjTaxSB') ?>

    <?php // echo $form->field($model, 'L_HFAdjTaxSB') ?>

    <?php // echo $form->field($model, 'L_AdtnlDAdjTaxSB') ?>

    <?php // echo $form->field($model, 'L_AdjTaxSB') ?>

    <?php // echo $form->field($model, 'L_AdjALWOPCOLA') ?>

    <?php // echo $form->field($model, 'L_PFALWOPCOLA') ?>

    <?php // echo $form->field($model, 'L_HFALWOPCOLA') ?>

    <?php // echo $form->field($model, 'L_AdtnlDALWOPCOLA') ?>

    <?php // echo $form->field($model, 'L_ALWOPCOLA') ?>

    <?php // echo $form->field($model, 'L_AdjALWOPEFA') ?>

    <?php // echo $form->field($model, 'L_PFALWOPEFA') ?>

    <?php // echo $form->field($model, 'L_HFALWOPEFA') ?>

    <?php // echo $form->field($model, 'L_AdtnlDALWOPEFA') ?>

    <?php // echo $form->field($model, 'L_ALWOPEFA') ?>

    <?php // echo $form->field($model, 'L_AdjVaccine') ?>

    <?php // echo $form->field($model, 'L_PFVaccine') ?>

    <?php // echo $form->field($model, 'L_HFVaccine') ?>

    <?php // echo $form->field($model, 'L_AdtnlDVaccine') ?>

    <?php // echo $form->field($model, 'L_Vaccine') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
