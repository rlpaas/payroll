<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH08_LOANS".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $L_AdjSSS
 * @property string $L_PFSSS
 * @property string $L_HFSSS
 * @property string $L_AdtnlDSSS
 * @property string $L_SSS
 * @property string $L_AdjSSSC
 * @property string $L_PFSSSC
 * @property string $L_HFSSSC
 * @property string $L_AdtnlDSSSC
 * @property string $L_SSSC
 * @property string $L_AdjHDMF
 * @property string $L_PFHDMF
 * @property string $L_HFHDMF
 * @property string $L_AdtnlDHDMF
 * @property string $L_HDMF
 * @property string $L_AdjHDMFMP
 * @property string $L_PFHDMFMP
 * @property string $L_HFHDMFMP
 * @property string $L_AdtnlDHDMFMP
 * @property string $L_HDMFMP
 * @property string $L_AdjHDMFC
 * @property string $L_PFHDMFC
 * @property string $L_HFHDMFC
 * @property string $L_AdtnlDHDMFC
 * @property string $L_HDMFC
 * @property string $L_AdjLOVEMPP
 * @property string $L_PFLOVEMPP
 * @property string $L_HFLOVEMPP
 * @property string $L_AdtnlDLOVEMPP
 * @property string $L_LOVEMPP
 * @property string $L_AdjFAWU
 * @property string $L_PFFAWU
 * @property string $L_HFFAWU
 * @property string $L_AdtnlDFAWU
 * @property string $L_FAWU
 * @property string $L_AdjCEUHousingInt
 * @property string $L_PFCEUHousingInt
 * @property string $L_HFCEUHousingInt
 * @property string $L_AdtnlDCEUHousingInt
 * @property string $L_CEUHousingInt
 * @property string $L_AdjCEUHousingPcpl
 * @property string $L_PFCEUHousingPcpl
 * @property string $L_HFCEUHousingPcpl
 * @property string $L_AdtnlDCEUHousingPcpl
 * @property string $L_CEUHousingPcpl
 * @property string $L_AdjMedical
 * @property string $L_PFMedical
 * @property string $L_HFMedical
 * @property string $L_AdtnlDMedical
 * @property string $L_Medical
 * @property string $L_AdjTechnology
 * @property string $L_PFTechnology
 * @property string $L_HFTechnology
 * @property string $L_AdtnlDTechnology
 * @property string $L_Technology
 * @property string $L_AdjHospital
 * @property string $L_PFHospital
 * @property string $L_HFHospital
 * @property string $L_AdtnlDHospital
 * @property string $L_Hospital
 * @property string $L_AdjEmergency
 * @property string $L_PFEmergency
 * @property string $L_HFEmergency
 * @property string $L_AdtnlDEmergency
 * @property string $L_Emergency
 * @property string $L_AdjUnified
 * @property string $L_PFUnified
 * @property string $L_HFUnified
 * @property string $L_AdtnlDUnified
 * @property string $L_Unified
 * @property string $L_AdjBDay
 * @property string $L_PFBDay
 * @property string $L_HFBDay
 * @property string $L_AdtnlDBDay
 * @property string $L_BDay
 * @property string $L_AdjTravel
 * @property string $L_PFTravel
 * @property string $L_HFTravel
 * @property string $L_AdtnlDTravel
 * @property string $L_Travel
 * @property string $L_AdjPettyCash
 * @property string $L_PFPettyCash
 * @property string $L_HFPettyCash
 * @property string $L_AdtnlDPettyCash
 * @property string $L_PettyCash
 * @property string $L_AdjSpecial
 * @property string $L_PFSpecial
 * @property string $L_HFSpecial
 * @property string $L_AdtnlDSpecial
 * @property string $L_Special
 * @property string $L_AdjPhilamcare
 * @property string $L_PFPhilamcare
 * @property string $L_HFPhilamcare
 * @property string $L_AdtnlDPhilamcare
 * @property string $L_Philamcare
 * @property string $L_AdjSavingsDep
 * @property string $L_PFSavingsDep
 * @property string $L_HFSavingsDep
 * @property string $L_AdtnlDSavingsDep
 * @property string $L_SavingsDep
 * @property string $L_AdjFixedDep
 * @property string $L_PFFixedDep
 * @property string $L_HFFixedDep
 * @property string $L_AdtnlDFixedDep
 * @property string $L_FixedDep
 * @property string $L_AdjPensionDep
 * @property string $L_PFPensionDep
 * @property string $L_HFPensionDep
 * @property string $L_AdtnlDPensionDep
 * @property string $L_PensionDep
 * @property string $L_AdjSeminar
 * @property string $L_PFSeminar
 * @property string $L_HFSeminar
 * @property string $L_AdtnlDSeminar
 * @property string $L_Seminar
 * @property string $L_AdjCoop
 * @property string $L_PFCoop
 * @property string $L_HFCoop
 * @property string $L_AdtnlDCoop
 * @property string $L_Coop
 * @property string $L_AdjTuition
 * @property string $L_PFTuition
 * @property string $L_HFTuition
 * @property string $L_AdtnlDTuition
 * @property string $L_Tuition
 * @property string $L_AdjFieldTrip
 * @property string $L_PFFieldTrip
 * @property string $L_HFFieldTrip
 * @property string $L_AdtnlDFieldTrip
 * @property string $L_FieldTrip
 * @property string $L_AdjCCLove
 * @property string $L_PFCCLove
 * @property string $L_HFCCLove
 * @property string $L_AdtnlDCCLove
 * @property string $L_CCLove
 * @property string $L_AdjEuroUSAInt
 * @property string $L_PFEuroUSAInt
 * @property string $L_HFEuroUSAInt
 * @property string $L_AdtnlDEuroUSAInt
 * @property string $L_EuroUSAInt
 * @property string $L_AdjEuroUSAPcpl
 * @property string $L_PFEuroUSAPcpl
 * @property string $L_HFEuroUSAPcpl
 * @property string $L_AdtnlDEuroUSAPcpl
 * @property string $L_EuroUSAPcpl
 * @property string $L_AdjHolyLandTour
 * @property string $L_PFHolyLandTour
 * @property string $L_HFHolyLandTour
 * @property string $L_AdtnlDHolyLandTour
 * @property string $L_HolyLandTour
 * @property string $L_AdjHKTravel
 * @property string $L_PFHKTravel
 * @property string $L_HFHKTravel
 * @property string $L_AdtnlDHKTravel
 * @property string $L_HKTravel
 * @property string $L_AdjPAFTETour
 * @property string $L_PFPAFTETour
 * @property string $L_HFPAFTETour
 * @property string $L_AdtnlDPAFTETour
 * @property string $L_PAFTETour
 * @property string $L_AdjAsiaPacConfe
 * @property string $L_PFAsiaPacConfe
 * @property string $L_HFAsiaPacConfe
 * @property string $L_AdtnlDAsiaPacConfe
 * @property string $L_AsiaPacConfe
 * @property string $L_AdjParking
 * @property string $L_PFParking
 * @property string $L_HFParking
 * @property string $L_AdtnlDParking
 * @property string $L_Parking
 * @property string $L_AdjComputer
 * @property string $L_PFComputer
 * @property string $L_HFComputer
 * @property string $L_AdtnlDComputer
 * @property string $L_Computer
 * @property string $L_AdjOPBasic
 * @property string $L_PFOPBasic
 * @property string $L_HFOPBasic
 * @property string $L_AdtnlDOPBasic
 * @property string $L_OPBasic
 * @property string $L_AdjOPEFA
 * @property string $L_PFOPEFA
 * @property string $L_HFOPEFA
 * @property string $L_AdtnlDOPEFA
 * @property string $L_OPEFA
 * @property string $L_AdjOPCOLA
 * @property string $L_PFOPCOLA
 * @property string $L_HFOPCOLA
 * @property string $L_AdtnlDOPCOLA
 * @property string $L_OPCOLA
 * @property string $L_AdjAdjTax
 * @property string $L_PFAdjTax
 * @property string $L_HFAdjTax
 * @property string $L_AdtnlDAdjTax
 * @property string $L_AdjTax
 * @property string $L_AdjAdjTaxSB
 * @property string $L_PFAdjTaxSB
 * @property string $L_HFAdjTaxSB
 * @property string $L_AdtnlDAdjTaxSB
 * @property string $L_AdjTaxSB
 * @property string $L_AdjALWOPCOLA
 * @property string $L_PFALWOPCOLA
 * @property string $L_HFALWOPCOLA
 * @property string $L_AdtnlDALWOPCOLA
 * @property string $L_ALWOPCOLA
 * @property string $L_AdjALWOPEFA
 * @property string $L_PFALWOPEFA
 * @property string $L_HFALWOPEFA
 * @property string $L_AdtnlDALWOPEFA
 * @property string $L_ALWOPEFA
 * @property string $L_AdjVaccine
 * @property string $L_PFVaccine
 * @property string $L_HFVaccine
 * @property string $L_AdtnlDVaccine
 * @property string $L_Vaccine
 */
class Loans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH08_LOANS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['L_AdjSSS', 'L_PFSSS', 'L_HFSSS', 'L_AdtnlDSSS', 'L_SSS', 'L_AdjSSSC', 'L_PFSSSC', 'L_HFSSSC', 'L_AdtnlDSSSC', 'L_SSSC', 'L_AdjHDMF', 'L_PFHDMF', 'L_HFHDMF', 'L_AdtnlDHDMF', 'L_HDMF', 'L_AdjHDMFMP', 'L_PFHDMFMP', 'L_HFHDMFMP', 'L_AdtnlDHDMFMP', 'L_HDMFMP', 'L_AdjHDMFC', 'L_PFHDMFC', 'L_HFHDMFC', 'L_AdtnlDHDMFC', 'L_HDMFC', 'L_AdjLOVEMPP', 'L_PFLOVEMPP', 'L_HFLOVEMPP', 'L_AdtnlDLOVEMPP', 'L_LOVEMPP', 'L_AdjFAWU', 'L_PFFAWU', 'L_HFFAWU', 'L_AdtnlDFAWU', 'L_FAWU', 'L_AdjCEUHousingInt', 'L_PFCEUHousingInt', 'L_HFCEUHousingInt', 'L_AdtnlDCEUHousingInt', 'L_CEUHousingInt', 'L_AdjCEUHousingPcpl', 'L_PFCEUHousingPcpl', 'L_HFCEUHousingPcpl', 'L_AdtnlDCEUHousingPcpl', 'L_CEUHousingPcpl', 'L_AdjMedical', 'L_PFMedical', 'L_HFMedical', 'L_AdtnlDMedical', 'L_Medical', 'L_AdjTechnology', 'L_PFTechnology', 'L_HFTechnology', 'L_AdtnlDTechnology', 'L_Technology', 'L_AdjHospital', 'L_PFHospital', 'L_HFHospital', 'L_AdtnlDHospital', 'L_Hospital', 'L_AdjEmergency', 'L_PFEmergency', 'L_HFEmergency', 'L_AdtnlDEmergency', 'L_Emergency', 'L_AdjUnified', 'L_PFUnified', 'L_HFUnified', 'L_AdtnlDUnified', 'L_Unified', 'L_AdjBDay', 'L_PFBDay', 'L_HFBDay', 'L_AdtnlDBDay', 'L_BDay', 'L_AdjTravel', 'L_PFTravel', 'L_HFTravel', 'L_AdtnlDTravel', 'L_Travel', 'L_AdjPettyCash', 'L_PFPettyCash', 'L_HFPettyCash', 'L_AdtnlDPettyCash', 'L_PettyCash', 'L_AdjSpecial', 'L_PFSpecial', 'L_HFSpecial', 'L_AdtnlDSpecial', 'L_Special', 'L_AdjPhilamcare', 'L_PFPhilamcare', 'L_HFPhilamcare', 'L_AdtnlDPhilamcare', 'L_Philamcare', 'L_AdjSavingsDep', 'L_PFSavingsDep', 'L_HFSavingsDep', 'L_AdtnlDSavingsDep', 'L_SavingsDep', 'L_AdjFixedDep', 'L_PFFixedDep', 'L_HFFixedDep', 'L_AdtnlDFixedDep', 'L_FixedDep', 'L_AdjPensionDep', 'L_PFPensionDep', 'L_HFPensionDep', 'L_AdtnlDPensionDep', 'L_PensionDep', 'L_AdjSeminar', 'L_PFSeminar', 'L_HFSeminar', 'L_AdtnlDSeminar', 'L_Seminar', 'L_AdjCoop', 'L_PFCoop', 'L_HFCoop', 'L_AdtnlDCoop', 'L_Coop', 'L_AdjTuition', 'L_PFTuition', 'L_HFTuition', 'L_AdtnlDTuition', 'L_Tuition', 'L_AdjFieldTrip', 'L_PFFieldTrip', 'L_HFFieldTrip', 'L_AdtnlDFieldTrip', 'L_FieldTrip', 'L_AdjCCLove', 'L_PFCCLove', 'L_HFCCLove', 'L_AdtnlDCCLove', 'L_CCLove', 'L_AdjEuroUSAInt', 'L_PFEuroUSAInt', 'L_HFEuroUSAInt', 'L_AdtnlDEuroUSAInt', 'L_EuroUSAInt', 'L_AdjEuroUSAPcpl', 'L_PFEuroUSAPcpl', 'L_HFEuroUSAPcpl', 'L_AdtnlDEuroUSAPcpl', 'L_EuroUSAPcpl', 'L_AdjHolyLandTour', 'L_PFHolyLandTour', 'L_HFHolyLandTour', 'L_AdtnlDHolyLandTour', 'L_HolyLandTour', 'L_AdjHKTravel', 'L_PFHKTravel', 'L_HFHKTravel', 'L_AdtnlDHKTravel', 'L_HKTravel', 'L_AdjPAFTETour', 'L_PFPAFTETour', 'L_HFPAFTETour', 'L_AdtnlDPAFTETour', 'L_PAFTETour', 'L_AdjAsiaPacConfe', 'L_PFAsiaPacConfe', 'L_HFAsiaPacConfe', 'L_AdtnlDAsiaPacConfe', 'L_AsiaPacConfe', 'L_AdjParking', 'L_PFParking', 'L_HFParking', 'L_AdtnlDParking', 'L_Parking', 'L_AdjComputer', 'L_PFComputer', 'L_HFComputer', 'L_AdtnlDComputer', 'L_Computer', 'L_AdjOPBasic', 'L_PFOPBasic', 'L_HFOPBasic', 'L_AdtnlDOPBasic', 'L_OPBasic', 'L_AdjOPEFA', 'L_PFOPEFA', 'L_HFOPEFA', 'L_AdtnlDOPEFA', 'L_OPEFA', 'L_AdjOPCOLA', 'L_PFOPCOLA', 'L_HFOPCOLA', 'L_AdtnlDOPCOLA', 'L_OPCOLA', 'L_AdjAdjTax', 'L_PFAdjTax', 'L_HFAdjTax', 'L_AdtnlDAdjTax', 'L_AdjTax', 'L_AdjAdjTaxSB', 'L_PFAdjTaxSB', 'L_HFAdjTaxSB', 'L_AdtnlDAdjTaxSB', 'L_AdjTaxSB', 'L_AdjALWOPCOLA', 'L_PFALWOPCOLA', 'L_HFALWOPCOLA', 'L_AdtnlDALWOPCOLA', 'L_ALWOPCOLA', 'L_AdjALWOPEFA', 'L_PFALWOPEFA', 'L_HFALWOPEFA', 'L_AdtnlDALWOPEFA', 'L_ALWOPEFA', 'L_AdjVaccine', 'L_PFVaccine', 'L_HFVaccine', 'L_AdtnlDVaccine', 'L_Vaccine'], 'number'],
            [['EmpID', 'PrdID'], 'string', 'max' => 32],
            [['EmpID', 'PrdID'], 'unique', 'targetAttribute' => ['EmpID', 'PrdID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'PrdID' => 'Prd ID',
            'L_AdjSSS'  =>  'SSS Loan Adjustment or New Balance',
            'L_PFSSS'   =>  'SSS Loan Period Factor',
            'L_HFSSS'   =>  'SSS Loan Handling Fee',
            'L_AdtnlDSSS'   =>  'SSS Loan Additional Deduction',
            'L_SSS' =>  'SSS Loan Deduction',
            'L_AdjSSSC' =>  'SSS Calamity Loan Adjustment or New Balance',
            'L_PFSSSC'  =>  'SSS Calamity Loan Period Factor',
            'L_HFSSSC'  =>  'SSS Calamity Loan Handling Fee',
            'L_AdtnlDSSSC'  =>  'SSS Calamity Loan Additional Deduction',
            'L_SSSC'    =>  'SSS Calamity Loan Deduction',
            'L_AdjHDMF' =>  'HDMF Adjustment or New Balance',
            'L_PFHDMF'  =>  'HDMF Period Factor',
            'L_HFHDMF'  =>  'HDMF Handling Fee',
            'L_AdtnlDHDMF'  =>  'HDMF Additional Deduction',
            'L_HDMF'    =>  'HDMF Deduction',
            'L_AdjHDMFMP'   =>  'HDMF Multi Purpose Loan Adjustment or New Balance',
            'L_PFHDMFMP'    =>  'HDMF Multi Purpose Loan Period Factor',
            'L_HFHDMFMP'    =>  'HDMF Multi Purpose Loan Handling Fee',
            'L_AdtnlDHDMFMP'    =>  'HDMF Multi Purpose Loan Additional Deduction',
            'L_HDMFMP'  =>  'HDMF Multi Purpose Loan Deduction',
            'L_AdjHDMFC'    =>  'HDMF Calamity Loan Adjustment or New Balance',
            'L_PFHDMFC' =>  'HDMF Calamity Loan Period Factor',
            'L_HFHDMFC' =>  'HDMF Calamity Loan Handling Fee',
            'L_AdtnlDHDMFC' =>  'HDMF Calamity Loan Additional Deduction',
            'L_HDMFC'   =>  'HDMF Calamity Loan Deduction',
            'L_AdjLOVEMPP'  =>  'LOVE/ Pag-Ibig Multi Purpose Loan Adjustment or New Balance',
            'L_PFLOVEMPP'   =>  'LOVE/ Pag-Ibig Multi Purpose Loan Period Factor',
            'L_HFLOVEMPP'   =>  'LOVE/ Pag-Ibig Multi Purpose Loan Handling Fee',
            'L_AdtnlDLOVEMPP'   =>  'LOVE/ Pag-Ibig Multi Purpose Loan Additional Deduction',
            'L_LOVEMPP' =>  'LOVE/ Pag-Ibig Multi Purpose Loan Deduction',
            'L_AdjFAWU' =>  'FAWU - LOAN Adjustment or New Balance',
            'L_PFFAWU'  =>  'FAWU - LOAN Period Factor',
            'L_HFFAWU'  =>  'FAWU - LOAN Handling Fee',
            'L_AdtnlDFAWU'  =>  'FAWU - LOAN Additional Deduction',
            'L_FAWU'    =>  'FAWU - LOAN Deduction',
            'L_AdjCEUHousingInt'    =>  'Housing Loan Interest Adjustment or New Balance',
            'L_PFCEUHousingInt' =>  'Housing Loan Interest Period Factor',
            'L_HFCEUHousingInt' =>  'Housing Loan Interest Handling Fee',
            'L_AdtnlDCEUHousingInt' =>  'Housing Loan Interest Additional Deduction',
            'L_CEUHousingInt'   =>  'Housing Loan Interest Deduction',
            'L_AdjCEUHousingPcpl'   =>  'Housing Loan Principal Adjustment or New Balance',
            'L_PFCEUHousingPcpl'    =>  'Housing Loan Principal Period Factor',
            'L_HFCEUHousingPcpl'    =>  'Housing Loan Principal Handling Fee',
            'L_AdtnlDCEUHousingPcpl'    =>  'Housing Loan Principal Additional Deduction',
            'L_CEUHousingPcpl'  =>  'Housing Loan Principal Deduction',
            'L_AdjMedical'  =>  'Medical Loan Adjustment or New Balance',
            'L_PFMedical'   =>  'Medical Loan Period Factor',
            'L_HFMedical'   =>  'Medical Loan Handling Fee',
            'L_AdtnlDMedical'   =>  'Medical Loan Additional Deduction',
            'L_Medical' =>  'Medical Loan Deduction',
            'L_AdjTechnology'   =>  'Technology Adjustment or New Balance',
            'L_PFTechnology'    =>  'Technology Period Factor',
            'L_HFTechnology'    =>  'Technology Handling Fee',
            'L_AdtnlDTechnology'    =>  'Technology Additional Deduction',
            'L_Technology'  =>  'Technology Deduction',
            'L_AdjHospital' =>  'Hospiital Adjustment or New Balance',
            'L_PFHospital'  =>  'Hospiital Period Factor',
            'L_HFHospital'  =>  'Hospiital Handling Fee',
            'L_AdtnlDHospital'  =>  'Hospiital Additional Deduction',
            'L_Hospital'    =>  'Hospiital Deduction',
            'L_AdjEmergency'    =>  'Emergency Loan Adjustment or New Balance',
            'L_PFEmergency' =>  'Emergency Loan Period Factor',
            'L_HFEmergency' =>  'Emergency Loan Handling Fee',
            'L_AdtnlDEmergency' =>  'Emergency Loan Additional Deduction',
            'L_Emergency'   =>  'Emergency Loan Deduction',
            'L_AdjUnified'  =>  'Unified Adjustment or New Balance',
            'L_PFUnified'   =>  'Unified Period Factor',
            'L_HFUnified'   =>  'Unified Handling Fee',
            'L_AdtnlDUnified'   =>  'Unified Additional Deduction',
            'L_Unified' =>  'Unified Deduction',
            'L_AdjBDay' =>  'B-Day Loan Adjustment or New Balance',
            'L_PFBDay'  =>  'B-Day Loan Period Factor',
            'L_HFBDay'  =>  'B-Day Loan Handling Fee',
            'L_AdtnlDBDay'  =>  'B-Day Loan Additional Deduction',
            'L_BDay'    =>  'B-Day Loan Deduction',
            'L_AdjTravel'   =>  'Travel Loan (Europe, Holy Land, etc.) Adjustment or New Balance',
            'L_PFTravel'    =>  'Travel Loan (Europe, Holy Land, etc.) Period Factor',
            'L_HFTravel'    =>  'Travel Loan (Europe, Holy Land, etc.) Handling Fee',
            'L_AdtnlDTravel'    =>  'Travel Loan (Europe, Holy Land, etc.) Additional Deduction',
            'L_Travel'  =>  'Travel Loan (Europe, Holy Land, etc.) Deduction',
            'L_AdjPettyCash'    =>  'Petty Cash Adjustment or New Balance',
            'L_PFPettyCash' =>  'Petty Cash Period Factor',
            'L_HFPettyCash' =>  'Petty Cash Handling Fee',
            'L_AdtnlDPettyCash' =>  'Petty Cash Additional Deduction',
            'L_PettyCash'   =>  'Petty Cash Deduction',
            'L_AdjSpecial'  =>  'Special Assistance Adjustment or New Balance',
            'L_PFSpecial'   =>  'Special Assistance Period Factor',
            'L_HFSpecial'   =>  'Special Assistance Handling Fee',
            'L_AdtnlDSpecial'   =>  'Special Assistance Additional Deduction',
            'L_Special' =>  'Special Assistance Deduction',
            'L_AdjPhilamcare'   =>  'Philam Care Adjustment or New Balance',
            'L_PFPhilamcare'    =>  'Philam Care Period Factor',
            'L_HFPhilamcare'    =>  'Philam Care Handling Fee',
            'L_AdtnlDPhilamcare'    =>  'Philam Care Additional Deduction',
            'L_Philamcare'  =>  'Philam Care Deduction',
            'L_AdjSavingsDep'   =>  'Saving Deposit Adjustment or New Balance',
            'L_PFSavingsDep'    =>  'Saving Deposit Period Factor',
            'L_HFSavingsDep'    =>  'Saving Deposit Handling Fee',
            'L_AdtnlDSavingsDep'    =>  'Saving Deposit Additional Deduction',
            'L_SavingsDep'  =>  'Saving Deposit Deduction',
            'L_AdjFixedDep' =>  'Fixed Deposit Adjustment or New Balance',
            'L_PFFixedDep'  =>  'Fixed Deposit Period Factor',
            'L_HFFixedDep'  =>  'Fixed Deposit Handling Fee',
            'L_AdtnlDFixedDep'  =>  'Fixed Deposit Additional Deduction',
            'L_FixedDep'    =>  'Fixed Deposit Deduction',
            'L_AdjPensionDep'   =>  'Pension Deposit Adjustment or New Balance',
            'L_PFPensionDep'    =>  'Pension Deposit Period Factor',
            'L_HFPensionDep'    =>  'Pension Deposit Handling Fee',
            'L_AdtnlDPensionDep'    =>  'Pension Deposit Additional Deduction',
            'L_PensionDep'  =>  'Pension Deposit Deduction',
            'L_AdjSeminar'  =>  'Seminar Adjustment or New Balance',
            'L_PFSeminar'   =>  'Seminar Period Factor',
            'L_HFSeminar'   =>  'Seminar Handling Fee',
            'L_AdtnlDSeminar'   =>  'Seminar Additional Deduction',
            'L_Seminar' =>  'Seminar Deduction',
            'L_AdjCoop' =>  'Coop Adjustment or New Balance',
            'L_PFCoop'  =>  'Coop Period Factor',
            'L_HFCoop'  =>  'Coop Handling Fee',
            'L_AdtnlDCoop'  =>  'Coop Additional Deduction',
            'L_Coop'    =>  'Coop Deduction',
            'L_AdjTuition'  =>  'Tuition Adjustment or New Balance',
            'L_PFTuition'   =>  'Tuition Period Factor',
            'L_HFTuition'   =>  'Tuition Handling Fee',
            'L_AdtnlDTuition'   =>  'Tuition Additional Deduction',
            'L_Tuition' =>  'Tuition Deduction',
            'L_AdjFieldTrip'    =>  'FIELD TRIP Adjustment or New Balance',
            'L_PFFieldTrip' =>  'FIELD TRIP Period Factor',
            'L_HFFieldTrip' =>  'FIELD TRIP Handling Fee',
            'L_AdtnlDFieldTrip' =>  'FIELD TRIP Additional Deduction',
            'L_FieldTrip'   =>  'FIELD TRIP Deduction',
            'L_AdjCCLove'   =>  'CC MP LOAN / LOVE LOAN Adjustment or New Balance',
            'L_PFCCLove'    =>  'CC MP LOAN / LOVE LOAN Period Factor',
            'L_HFCCLove'    =>  'CC MP LOAN / LOVE LOAN Handling Fee',
            'L_AdtnlDCCLove'    =>  'CC MP LOAN / LOVE LOAN Additional Deduction',
            'L_CCLove'  =>  'CC MP LOAN / LOVE LOAN Deduction',
            'L_AdjEuroUSAInt'   =>  'EUROPE/USA T (INT) Adjustment or New Balance',
            'L_PFEuroUSAInt'    =>  'EUROPE/USA T (INT) Period Factor',
            'L_HFEuroUSAInt'    =>  'EUROPE/USA T (INT) Handling Fee',
            'L_AdtnlDEuroUSAInt'    =>  'EUROPE/USA T (INT) Additional Deduction',
            'L_EuroUSAInt'  =>  'EUROPE/USA T (INT) Deduction',
            'L_AdjEuroUSAPcpl'  =>  'EUROPE/USA T (PRIN) Adjustment or New Balance',
            'L_PFEuroUSAPcpl'   =>  'EUROPE/USA T (PRIN) Period Factor',
            'L_HFEuroUSAPcpl'   =>  'EUROPE/USA T (PRIN) Handling Fee',
            'L_AdtnlDEuroUSAPcpl'   =>  'EUROPE/USA T (PRIN) Additional Deduction',
            'L_EuroUSAPcpl' =>  'EUROPE/USA T (PRIN) Deduction',
            'L_AdjHolyLandTour' =>  'HOLY LAND TOUR Adjustment or New Balance',
            'L_PFHolyLandTour'  =>  'HOLY LAND TOUR Period Factor',
            'L_HFHolyLandTour'  =>  'HOLY LAND TOUR Handling Fee',
            'L_AdtnlDHolyLandTour'  =>  'HOLY LAND TOUR Additional Deduction',
            'L_HolyLandTour'    =>  'HOLY LAND TOUR Deduction',
            'L_AdjHKTravel' =>  'HONGKONG TRAVEL LOAN Adjustment or New Balance',
            'L_PFHKTravel'  =>  'HONGKONG TRAVEL LOAN Period Factor',
            'L_HFHKTravel'  =>  'HONGKONG TRAVEL LOAN Handling Fee',
            'L_AdtnlDHKTravel'  =>  'HONGKONG TRAVEL LOAN Additional Deduction',
            'L_HKTravel'    =>  'HONGKONG TRAVEL LOAN Deduction',
            'L_AdjPAFTETour'    =>  'PAFTE STUDY TOUR Adjustment or New Balance',
            'L_PFPAFTETour' =>  'PAFTE STUDY TOUR Period Factor',
            'L_HFPAFTETour' =>  'PAFTE STUDY TOUR Handling Fee',
            'L_AdtnlDPAFTETour' =>  'PAFTE STUDY TOUR Additional Deduction',
            'L_PAFTETour'   =>  'PAFTE STUDY TOUR Deduction',
            'L_AdjAsiaPacConfe' =>  'ASIA PACIFIC CONFERENCE Adjustment or New Balance',
            'L_PFAsiaPacConfe'  =>  'ASIA PACIFIC CONFERENCE Period Factor',
            'L_HFAsiaPacConfe'  =>  'ASIA PACIFIC CONFERENCE Handling Fee',
            'L_AdtnlDAsiaPacConfe'  =>  'ASIA PACIFIC CONFERENCE Additional Deduction',
            'L_AsiaPacConfe'    =>  'ASIA PACIFIC CONFERENCE Deduction',
            'L_AdjParking'  =>  'PARKING FEE Adjustment or New Balance',
            'L_PFParking'   =>  'PARKING FEE Period Factor',
            'L_HFParking'   =>  'PARKING FEE Handling Fee',
            'L_AdtnlDParking'   =>  'PARKING FEE Additional Deduction',
            'L_Parking' =>  'PARKING FEE Deduction',
            'L_AdjComputer' =>  'COMPUTER Adjustment or New Balance',
            'L_PFComputer'  =>  'COMPUTER Period Factor',
            'L_HFComputer'  =>  'COMPUTER Handling Fee',
            'L_AdtnlDComputer'  =>  'COMPUTER Additional Deduction',
            'L_Computer'    =>  'COMPUTER Deduction',
            'L_AdjOPBasic'  =>  'OVERPAYMENT BASIC Adjustment or New Balance',
            'L_PFOPBasic'   =>  'OVERPAYMENT BASIC Period Factor',
            'L_HFOPBasic'   =>  'OVERPAYMENT BASIC Handling Fee',
            'L_AdtnlDOPBasic'   =>  'OVERPAYMENT BASIC Additional Deduction',
            'L_OPBasic' =>  'OVERPAYMENT BASIC Deduction',
            'L_AdjOPEFA'    =>  'OVERPAYMENT EFA Adjustment or New Balance',
            'L_PFOPEFA' =>  'OVERPAYMENT EFA Period Factor',
            'L_HFOPEFA' =>  'OVERPAYMENT EFA Handling Fee',
            'L_AdtnlDOPEFA' =>  'OVERPAYMENT EFA Additional Deduction',
            'L_OPEFA'   =>  'OVERPAYMENT EFA Deduction',
            'L_AdjOPCOLA'   =>  'OVERPAYMENT - COLA Adjustment or New Balance',
            'L_PFOPCOLA'    =>  'OVERPAYMENT - COLA Period Factor',
            'L_HFOPCOLA'    =>  'OVERPAYMENT - COLA Handling Fee',
            'L_AdtnlDOPCOLA'    =>  'OVERPAYMENT - COLA Additional Deduction',
            'L_OPCOLA'  =>  'OVERPAYMENT - COLA Deduction',
            'L_AdjAdjTax'   =>  'TAX ADJUSTMENT Adjustment or New Balance',
            'L_PFAdjTax'    =>  'TAX ADJUSTMENT Period Factor',
            'L_HFAdjTax'    =>  'TAX ADJUSTMENT Handling Fee',
            'L_AdtnlDAdjTax'    =>  'TAX ADJUSTMENT Additional Deduction',
            'L_AdjTax'  =>  'TAX ADJUSTMENT Deduction',
            'L_AdjAdjTaxSB' =>  'TAX - SIGNING BONUS Adjustment or New Balance',
            'L_PFAdjTaxSB'  =>  'TAX - SIGNING BONUS Period Factor',
            'L_HFAdjTaxSB'  =>  'TAX - SIGNING BONUS Handling Fee',
            'L_AdtnlDAdjTaxSB'  =>  'TAX - SIGNING BONUS Additional Deduction',
            'L_AdjTaxSB'    =>  'TAX - SIGNING BONUS Deduction',
            'L_AdjALWOPCOLA'    =>  'ALWOP - COLA Adjustment or New Balance',
            'L_PFALWOPCOLA' =>  'ALWOP - COLA Period Factor',
            'L_HFALWOPCOLA' =>  'ALWOP - COLA Handling Fee',
            'L_AdtnlDALWOPCOLA' =>  'ALWOP - COLA Additional Deduction',
            'L_ALWOPCOLA'   =>  'ALWOP - COLA Deduction',
            'L_AdjALWOPEFA' =>  'ALWOP-EFA Adjustment or New Balance',
            'L_PFALWOPEFA'  =>  'ALWOP-EFA Period Factor',
            'L_HFALWOPEFA'  =>  'ALWOP-EFA Handling Fee',
            'L_AdtnlDALWOPEFA'  =>  'ALWOP-EFA Additional Deduction',
            'L_ALWOPEFA'    =>  'ALWOP-EFA Deduction',
            'L_AdjVaccine'  =>  'VACCINE ( FLU, HEPA ) Adjustment or New Balance',
            'L_PFVaccine'   =>  'VACCINE ( FLU, HEPA ) Period Factor',
            'L_HFVaccine'   =>  'VACCINE ( FLU, HEPA ) Handling Fee',
            'L_AdtnlDVaccine'   =>  'VACCINE ( FLU, HEPA ) Additional Deduction',
            'L_Vaccine' =>  'VACCINE ( FLU, HEPA ) Deduction',

        ];
    }
}
