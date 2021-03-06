<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LoansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loans-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EmpID',
            'PrdID',
            'L_AdjSSS',
            'L_PFSSS',
            'L_HFSSS',
            //'L_AdtnlDSSS',
            //'L_SSS',
            //'L_AdjSSSC',
            //'L_PFSSSC',
            //'L_HFSSSC',
            //'L_AdtnlDSSSC',
            //'L_SSSC',
            //'L_AdjHDMF',
            //'L_PFHDMF',
            //'L_HFHDMF',
            //'L_AdtnlDHDMF',
            //'L_HDMF',
            //'L_AdjHDMFMP',
            //'L_PFHDMFMP',
            //'L_HFHDMFMP',
            //'L_AdtnlDHDMFMP',
            //'L_HDMFMP',
            //'L_AdjHDMFC',
            //'L_PFHDMFC',
            //'L_HFHDMFC',
            //'L_AdtnlDHDMFC',
            //'L_HDMFC',
            //'L_AdjLOVEMPP',
            //'L_PFLOVEMPP',
            //'L_HFLOVEMPP',
            //'L_AdtnlDLOVEMPP',
            //'L_LOVEMPP',
            //'L_AdjFAWU',
            //'L_PFFAWU',
            //'L_HFFAWU',
            //'L_AdtnlDFAWU',
            //'L_FAWU',
            //'L_AdjCEUHousingInt',
            //'L_PFCEUHousingInt',
            //'L_HFCEUHousingInt',
            //'L_AdtnlDCEUHousingInt',
            //'L_CEUHousingInt',
            //'L_AdjCEUHousingPcpl',
            //'L_PFCEUHousingPcpl',
            //'L_HFCEUHousingPcpl',
            //'L_AdtnlDCEUHousingPcpl',
            //'L_CEUHousingPcpl',
            //'L_AdjMedical',
            //'L_PFMedical',
            //'L_HFMedical',
            //'L_AdtnlDMedical',
            //'L_Medical',
            //'L_AdjTechnology',
            //'L_PFTechnology',
            //'L_HFTechnology',
            //'L_AdtnlDTechnology',
            //'L_Technology',
            //'L_AdjHospital',
            //'L_PFHospital',
            //'L_HFHospital',
            //'L_AdtnlDHospital',
            //'L_Hospital',
            //'L_AdjEmergency',
            //'L_PFEmergency',
            //'L_HFEmergency',
            //'L_AdtnlDEmergency',
            //'L_Emergency',
            //'L_AdjUnified',
            //'L_PFUnified',
            //'L_HFUnified',
            //'L_AdtnlDUnified',
            //'L_Unified',
            //'L_AdjBDay',
            //'L_PFBDay',
            //'L_HFBDay',
            //'L_AdtnlDBDay',
            //'L_BDay',
            //'L_AdjTravel',
            //'L_PFTravel',
            //'L_HFTravel',
            //'L_AdtnlDTravel',
            //'L_Travel',
            //'L_AdjPettyCash',
            //'L_PFPettyCash',
            //'L_HFPettyCash',
            //'L_AdtnlDPettyCash',
            //'L_PettyCash',
            //'L_AdjSpecial',
            //'L_PFSpecial',
            //'L_HFSpecial',
            //'L_AdtnlDSpecial',
            //'L_Special',
            //'L_AdjPhilamcare',
            //'L_PFPhilamcare',
            //'L_HFPhilamcare',
            //'L_AdtnlDPhilamcare',
            //'L_Philamcare',
            //'L_AdjSavingsDep',
            //'L_PFSavingsDep',
            //'L_HFSavingsDep',
            //'L_AdtnlDSavingsDep',
            //'L_SavingsDep',
            //'L_AdjFixedDep',
            //'L_PFFixedDep',
            //'L_HFFixedDep',
            //'L_AdtnlDFixedDep',
            //'L_FixedDep',
            //'L_AdjPensionDep',
            //'L_PFPensionDep',
            //'L_HFPensionDep',
            //'L_AdtnlDPensionDep',
            //'L_PensionDep',
            //'L_AdjSeminar',
            //'L_PFSeminar',
            //'L_HFSeminar',
            //'L_AdtnlDSeminar',
            //'L_Seminar',
            //'L_AdjCoop',
            //'L_PFCoop',
            //'L_HFCoop',
            //'L_AdtnlDCoop',
            //'L_Coop',
            //'L_AdjTuition',
            //'L_PFTuition',
            //'L_HFTuition',
            //'L_AdtnlDTuition',
            //'L_Tuition',
            //'L_AdjFieldTrip',
            //'L_PFFieldTrip',
            //'L_HFFieldTrip',
            //'L_AdtnlDFieldTrip',
            //'L_FieldTrip',
            //'L_AdjCCLove',
            //'L_PFCCLove',
            //'L_HFCCLove',
            //'L_AdtnlDCCLove',
            //'L_CCLove',
            //'L_AdjEuroUSAInt',
            //'L_PFEuroUSAInt',
            //'L_HFEuroUSAInt',
            //'L_AdtnlDEuroUSAInt',
            //'L_EuroUSAInt',
            //'L_AdjEuroUSAPcpl',
            //'L_PFEuroUSAPcpl',
            //'L_HFEuroUSAPcpl',
            //'L_AdtnlDEuroUSAPcpl',
            //'L_EuroUSAPcpl',
            //'L_AdjHolyLandTour',
            //'L_PFHolyLandTour',
            //'L_HFHolyLandTour',
            //'L_AdtnlDHolyLandTour',
            //'L_HolyLandTour',
            //'L_AdjHKTravel',
            //'L_PFHKTravel',
            //'L_HFHKTravel',
            //'L_AdtnlDHKTravel',
            //'L_HKTravel',
            //'L_AdjPAFTETour',
            //'L_PFPAFTETour',
            //'L_HFPAFTETour',
            //'L_AdtnlDPAFTETour',
            //'L_PAFTETour',
            //'L_AdjAsiaPacConfe',
            //'L_PFAsiaPacConfe',
            //'L_HFAsiaPacConfe',
            //'L_AdtnlDAsiaPacConfe',
            //'L_AsiaPacConfe',
            //'L_AdjParking',
            //'L_PFParking',
            //'L_HFParking',
            //'L_AdtnlDParking',
            //'L_Parking',
            //'L_AdjComputer',
            //'L_PFComputer',
            //'L_HFComputer',
            //'L_AdtnlDComputer',
            //'L_Computer',
            //'L_AdjOPBasic',
            //'L_PFOPBasic',
            //'L_HFOPBasic',
            //'L_AdtnlDOPBasic',
            //'L_OPBasic',
            //'L_AdjOPEFA',
            //'L_PFOPEFA',
            //'L_HFOPEFA',
            //'L_AdtnlDOPEFA',
            //'L_OPEFA',
            //'L_AdjOPCOLA',
            //'L_PFOPCOLA',
            //'L_HFOPCOLA',
            //'L_AdtnlDOPCOLA',
            //'L_OPCOLA',
            //'L_AdjAdjTax',
            //'L_PFAdjTax',
            //'L_HFAdjTax',
            //'L_AdtnlDAdjTax',
            //'L_AdjTax',
            //'L_AdjAdjTaxSB',
            //'L_PFAdjTaxSB',
            //'L_HFAdjTaxSB',
            //'L_AdtnlDAdjTaxSB',
            //'L_AdjTaxSB',
            //'L_AdjALWOPCOLA',
            //'L_PFALWOPCOLA',
            //'L_HFALWOPCOLA',
            //'L_AdtnlDALWOPCOLA',
            //'L_ALWOPCOLA',
            //'L_AdjALWOPEFA',
            //'L_PFALWOPEFA',
            //'L_HFALWOPEFA',
            //'L_AdtnlDALWOPEFA',
            //'L_ALWOPEFA',
            //'L_AdjVaccine',
            //'L_PFVaccine',
            //'L_HFVaccine',
            //'L_AdtnlDVaccine',
            //'L_Vaccine',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
