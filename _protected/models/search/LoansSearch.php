<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Loans;

/**
 * LoansSearch represents the model behind the search form of `app\models\Loans`.
 */
class LoansSearch extends Loans
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'safe'],
            [['L_AdjSSS', 'L_PFSSS', 'L_HFSSS', 'L_AdtnlDSSS', 'L_SSS', 'L_AdjSSSC', 'L_PFSSSC', 'L_HFSSSC', 'L_AdtnlDSSSC', 'L_SSSC', 'L_AdjHDMF', 'L_PFHDMF', 'L_HFHDMF', 'L_AdtnlDHDMF', 'L_HDMF', 'L_AdjHDMFMP', 'L_PFHDMFMP', 'L_HFHDMFMP', 'L_AdtnlDHDMFMP', 'L_HDMFMP', 'L_AdjHDMFC', 'L_PFHDMFC', 'L_HFHDMFC', 'L_AdtnlDHDMFC', 'L_HDMFC', 'L_AdjLOVEMPP', 'L_PFLOVEMPP', 'L_HFLOVEMPP', 'L_AdtnlDLOVEMPP', 'L_LOVEMPP', 'L_AdjFAWU', 'L_PFFAWU', 'L_HFFAWU', 'L_AdtnlDFAWU', 'L_FAWU', 'L_AdjCEUHousingInt', 'L_PFCEUHousingInt', 'L_HFCEUHousingInt', 'L_AdtnlDCEUHousingInt', 'L_CEUHousingInt', 'L_AdjCEUHousingPcpl', 'L_PFCEUHousingPcpl', 'L_HFCEUHousingPcpl', 'L_AdtnlDCEUHousingPcpl', 'L_CEUHousingPcpl', 'L_AdjMedical', 'L_PFMedical', 'L_HFMedical', 'L_AdtnlDMedical', 'L_Medical', 'L_AdjTechnology', 'L_PFTechnology', 'L_HFTechnology', 'L_AdtnlDTechnology', 'L_Technology', 'L_AdjHospital', 'L_PFHospital', 'L_HFHospital', 'L_AdtnlDHospital', 'L_Hospital', 'L_AdjEmergency', 'L_PFEmergency', 'L_HFEmergency', 'L_AdtnlDEmergency', 'L_Emergency', 'L_AdjUnified', 'L_PFUnified', 'L_HFUnified', 'L_AdtnlDUnified', 'L_Unified', 'L_AdjBDay', 'L_PFBDay', 'L_HFBDay', 'L_AdtnlDBDay', 'L_BDay', 'L_AdjTravel', 'L_PFTravel', 'L_HFTravel', 'L_AdtnlDTravel', 'L_Travel', 'L_AdjPettyCash', 'L_PFPettyCash', 'L_HFPettyCash', 'L_AdtnlDPettyCash', 'L_PettyCash', 'L_AdjSpecial', 'L_PFSpecial', 'L_HFSpecial', 'L_AdtnlDSpecial', 'L_Special', 'L_AdjPhilamcare', 'L_PFPhilamcare', 'L_HFPhilamcare', 'L_AdtnlDPhilamcare', 'L_Philamcare', 'L_AdjSavingsDep', 'L_PFSavingsDep', 'L_HFSavingsDep', 'L_AdtnlDSavingsDep', 'L_SavingsDep', 'L_AdjFixedDep', 'L_PFFixedDep', 'L_HFFixedDep', 'L_AdtnlDFixedDep', 'L_FixedDep', 'L_AdjPensionDep', 'L_PFPensionDep', 'L_HFPensionDep', 'L_AdtnlDPensionDep', 'L_PensionDep', 'L_AdjSeminar', 'L_PFSeminar', 'L_HFSeminar', 'L_AdtnlDSeminar', 'L_Seminar', 'L_AdjCoop', 'L_PFCoop', 'L_HFCoop', 'L_AdtnlDCoop', 'L_Coop', 'L_AdjTuition', 'L_PFTuition', 'L_HFTuition', 'L_AdtnlDTuition', 'L_Tuition', 'L_AdjFieldTrip', 'L_PFFieldTrip', 'L_HFFieldTrip', 'L_AdtnlDFieldTrip', 'L_FieldTrip', 'L_AdjCCLove', 'L_PFCCLove', 'L_HFCCLove', 'L_AdtnlDCCLove', 'L_CCLove', 'L_AdjEuroUSAInt', 'L_PFEuroUSAInt', 'L_HFEuroUSAInt', 'L_AdtnlDEuroUSAInt', 'L_EuroUSAInt', 'L_AdjEuroUSAPcpl', 'L_PFEuroUSAPcpl', 'L_HFEuroUSAPcpl', 'L_AdtnlDEuroUSAPcpl', 'L_EuroUSAPcpl', 'L_AdjHolyLandTour', 'L_PFHolyLandTour', 'L_HFHolyLandTour', 'L_AdtnlDHolyLandTour', 'L_HolyLandTour', 'L_AdjHKTravel', 'L_PFHKTravel', 'L_HFHKTravel', 'L_AdtnlDHKTravel', 'L_HKTravel', 'L_AdjPAFTETour', 'L_PFPAFTETour', 'L_HFPAFTETour', 'L_AdtnlDPAFTETour', 'L_PAFTETour', 'L_AdjAsiaPacConfe', 'L_PFAsiaPacConfe', 'L_HFAsiaPacConfe', 'L_AdtnlDAsiaPacConfe', 'L_AsiaPacConfe', 'L_AdjParking', 'L_PFParking', 'L_HFParking', 'L_AdtnlDParking', 'L_Parking', 'L_AdjComputer', 'L_PFComputer', 'L_HFComputer', 'L_AdtnlDComputer', 'L_Computer', 'L_AdjOPBasic', 'L_PFOPBasic', 'L_HFOPBasic', 'L_AdtnlDOPBasic', 'L_OPBasic', 'L_AdjOPEFA', 'L_PFOPEFA', 'L_HFOPEFA', 'L_AdtnlDOPEFA', 'L_OPEFA', 'L_AdjOPCOLA', 'L_PFOPCOLA', 'L_HFOPCOLA', 'L_AdtnlDOPCOLA', 'L_OPCOLA', 'L_AdjAdjTax', 'L_PFAdjTax', 'L_HFAdjTax', 'L_AdtnlDAdjTax', 'L_AdjTax', 'L_AdjAdjTaxSB', 'L_PFAdjTaxSB', 'L_HFAdjTaxSB', 'L_AdtnlDAdjTaxSB', 'L_AdjTaxSB', 'L_AdjALWOPCOLA', 'L_PFALWOPCOLA', 'L_HFALWOPCOLA', 'L_AdtnlDALWOPCOLA', 'L_ALWOPCOLA', 'L_AdjALWOPEFA', 'L_PFALWOPEFA', 'L_HFALWOPEFA', 'L_AdtnlDALWOPEFA', 'L_ALWOPEFA', 'L_AdjVaccine', 'L_PFVaccine', 'L_HFVaccine', 'L_AdtnlDVaccine', 'L_Vaccine'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Loans::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'L_AdjSSS' => $this->L_AdjSSS,
            'L_PFSSS' => $this->L_PFSSS,
            'L_HFSSS' => $this->L_HFSSS,
            'L_AdtnlDSSS' => $this->L_AdtnlDSSS,
            'L_SSS' => $this->L_SSS,
            'L_AdjSSSC' => $this->L_AdjSSSC,
            'L_PFSSSC' => $this->L_PFSSSC,
            'L_HFSSSC' => $this->L_HFSSSC,
            'L_AdtnlDSSSC' => $this->L_AdtnlDSSSC,
            'L_SSSC' => $this->L_SSSC,
            'L_AdjHDMF' => $this->L_AdjHDMF,
            'L_PFHDMF' => $this->L_PFHDMF,
            'L_HFHDMF' => $this->L_HFHDMF,
            'L_AdtnlDHDMF' => $this->L_AdtnlDHDMF,
            'L_HDMF' => $this->L_HDMF,
            'L_AdjHDMFMP' => $this->L_AdjHDMFMP,
            'L_PFHDMFMP' => $this->L_PFHDMFMP,
            'L_HFHDMFMP' => $this->L_HFHDMFMP,
            'L_AdtnlDHDMFMP' => $this->L_AdtnlDHDMFMP,
            'L_HDMFMP' => $this->L_HDMFMP,
            'L_AdjHDMFC' => $this->L_AdjHDMFC,
            'L_PFHDMFC' => $this->L_PFHDMFC,
            'L_HFHDMFC' => $this->L_HFHDMFC,
            'L_AdtnlDHDMFC' => $this->L_AdtnlDHDMFC,
            'L_HDMFC' => $this->L_HDMFC,
            'L_AdjLOVEMPP' => $this->L_AdjLOVEMPP,
            'L_PFLOVEMPP' => $this->L_PFLOVEMPP,
            'L_HFLOVEMPP' => $this->L_HFLOVEMPP,
            'L_AdtnlDLOVEMPP' => $this->L_AdtnlDLOVEMPP,
            'L_LOVEMPP' => $this->L_LOVEMPP,
            'L_AdjFAWU' => $this->L_AdjFAWU,
            'L_PFFAWU' => $this->L_PFFAWU,
            'L_HFFAWU' => $this->L_HFFAWU,
            'L_AdtnlDFAWU' => $this->L_AdtnlDFAWU,
            'L_FAWU' => $this->L_FAWU,
            'L_AdjCEUHousingInt' => $this->L_AdjCEUHousingInt,
            'L_PFCEUHousingInt' => $this->L_PFCEUHousingInt,
            'L_HFCEUHousingInt' => $this->L_HFCEUHousingInt,
            'L_AdtnlDCEUHousingInt' => $this->L_AdtnlDCEUHousingInt,
            'L_CEUHousingInt' => $this->L_CEUHousingInt,
            'L_AdjCEUHousingPcpl' => $this->L_AdjCEUHousingPcpl,
            'L_PFCEUHousingPcpl' => $this->L_PFCEUHousingPcpl,
            'L_HFCEUHousingPcpl' => $this->L_HFCEUHousingPcpl,
            'L_AdtnlDCEUHousingPcpl' => $this->L_AdtnlDCEUHousingPcpl,
            'L_CEUHousingPcpl' => $this->L_CEUHousingPcpl,
            'L_AdjMedical' => $this->L_AdjMedical,
            'L_PFMedical' => $this->L_PFMedical,
            'L_HFMedical' => $this->L_HFMedical,
            'L_AdtnlDMedical' => $this->L_AdtnlDMedical,
            'L_Medical' => $this->L_Medical,
            'L_AdjTechnology' => $this->L_AdjTechnology,
            'L_PFTechnology' => $this->L_PFTechnology,
            'L_HFTechnology' => $this->L_HFTechnology,
            'L_AdtnlDTechnology' => $this->L_AdtnlDTechnology,
            'L_Technology' => $this->L_Technology,
            'L_AdjHospital' => $this->L_AdjHospital,
            'L_PFHospital' => $this->L_PFHospital,
            'L_HFHospital' => $this->L_HFHospital,
            'L_AdtnlDHospital' => $this->L_AdtnlDHospital,
            'L_Hospital' => $this->L_Hospital,
            'L_AdjEmergency' => $this->L_AdjEmergency,
            'L_PFEmergency' => $this->L_PFEmergency,
            'L_HFEmergency' => $this->L_HFEmergency,
            'L_AdtnlDEmergency' => $this->L_AdtnlDEmergency,
            'L_Emergency' => $this->L_Emergency,
            'L_AdjUnified' => $this->L_AdjUnified,
            'L_PFUnified' => $this->L_PFUnified,
            'L_HFUnified' => $this->L_HFUnified,
            'L_AdtnlDUnified' => $this->L_AdtnlDUnified,
            'L_Unified' => $this->L_Unified,
            'L_AdjBDay' => $this->L_AdjBDay,
            'L_PFBDay' => $this->L_PFBDay,
            'L_HFBDay' => $this->L_HFBDay,
            'L_AdtnlDBDay' => $this->L_AdtnlDBDay,
            'L_BDay' => $this->L_BDay,
            'L_AdjTravel' => $this->L_AdjTravel,
            'L_PFTravel' => $this->L_PFTravel,
            'L_HFTravel' => $this->L_HFTravel,
            'L_AdtnlDTravel' => $this->L_AdtnlDTravel,
            'L_Travel' => $this->L_Travel,
            'L_AdjPettyCash' => $this->L_AdjPettyCash,
            'L_PFPettyCash' => $this->L_PFPettyCash,
            'L_HFPettyCash' => $this->L_HFPettyCash,
            'L_AdtnlDPettyCash' => $this->L_AdtnlDPettyCash,
            'L_PettyCash' => $this->L_PettyCash,
            'L_AdjSpecial' => $this->L_AdjSpecial,
            'L_PFSpecial' => $this->L_PFSpecial,
            'L_HFSpecial' => $this->L_HFSpecial,
            'L_AdtnlDSpecial' => $this->L_AdtnlDSpecial,
            'L_Special' => $this->L_Special,
            'L_AdjPhilamcare' => $this->L_AdjPhilamcare,
            'L_PFPhilamcare' => $this->L_PFPhilamcare,
            'L_HFPhilamcare' => $this->L_HFPhilamcare,
            'L_AdtnlDPhilamcare' => $this->L_AdtnlDPhilamcare,
            'L_Philamcare' => $this->L_Philamcare,
            'L_AdjSavingsDep' => $this->L_AdjSavingsDep,
            'L_PFSavingsDep' => $this->L_PFSavingsDep,
            'L_HFSavingsDep' => $this->L_HFSavingsDep,
            'L_AdtnlDSavingsDep' => $this->L_AdtnlDSavingsDep,
            'L_SavingsDep' => $this->L_SavingsDep,
            'L_AdjFixedDep' => $this->L_AdjFixedDep,
            'L_PFFixedDep' => $this->L_PFFixedDep,
            'L_HFFixedDep' => $this->L_HFFixedDep,
            'L_AdtnlDFixedDep' => $this->L_AdtnlDFixedDep,
            'L_FixedDep' => $this->L_FixedDep,
            'L_AdjPensionDep' => $this->L_AdjPensionDep,
            'L_PFPensionDep' => $this->L_PFPensionDep,
            'L_HFPensionDep' => $this->L_HFPensionDep,
            'L_AdtnlDPensionDep' => $this->L_AdtnlDPensionDep,
            'L_PensionDep' => $this->L_PensionDep,
            'L_AdjSeminar' => $this->L_AdjSeminar,
            'L_PFSeminar' => $this->L_PFSeminar,
            'L_HFSeminar' => $this->L_HFSeminar,
            'L_AdtnlDSeminar' => $this->L_AdtnlDSeminar,
            'L_Seminar' => $this->L_Seminar,
            'L_AdjCoop' => $this->L_AdjCoop,
            'L_PFCoop' => $this->L_PFCoop,
            'L_HFCoop' => $this->L_HFCoop,
            'L_AdtnlDCoop' => $this->L_AdtnlDCoop,
            'L_Coop' => $this->L_Coop,
            'L_AdjTuition' => $this->L_AdjTuition,
            'L_PFTuition' => $this->L_PFTuition,
            'L_HFTuition' => $this->L_HFTuition,
            'L_AdtnlDTuition' => $this->L_AdtnlDTuition,
            'L_Tuition' => $this->L_Tuition,
            'L_AdjFieldTrip' => $this->L_AdjFieldTrip,
            'L_PFFieldTrip' => $this->L_PFFieldTrip,
            'L_HFFieldTrip' => $this->L_HFFieldTrip,
            'L_AdtnlDFieldTrip' => $this->L_AdtnlDFieldTrip,
            'L_FieldTrip' => $this->L_FieldTrip,
            'L_AdjCCLove' => $this->L_AdjCCLove,
            'L_PFCCLove' => $this->L_PFCCLove,
            'L_HFCCLove' => $this->L_HFCCLove,
            'L_AdtnlDCCLove' => $this->L_AdtnlDCCLove,
            'L_CCLove' => $this->L_CCLove,
            'L_AdjEuroUSAInt' => $this->L_AdjEuroUSAInt,
            'L_PFEuroUSAInt' => $this->L_PFEuroUSAInt,
            'L_HFEuroUSAInt' => $this->L_HFEuroUSAInt,
            'L_AdtnlDEuroUSAInt' => $this->L_AdtnlDEuroUSAInt,
            'L_EuroUSAInt' => $this->L_EuroUSAInt,
            'L_AdjEuroUSAPcpl' => $this->L_AdjEuroUSAPcpl,
            'L_PFEuroUSAPcpl' => $this->L_PFEuroUSAPcpl,
            'L_HFEuroUSAPcpl' => $this->L_HFEuroUSAPcpl,
            'L_AdtnlDEuroUSAPcpl' => $this->L_AdtnlDEuroUSAPcpl,
            'L_EuroUSAPcpl' => $this->L_EuroUSAPcpl,
            'L_AdjHolyLandTour' => $this->L_AdjHolyLandTour,
            'L_PFHolyLandTour' => $this->L_PFHolyLandTour,
            'L_HFHolyLandTour' => $this->L_HFHolyLandTour,
            'L_AdtnlDHolyLandTour' => $this->L_AdtnlDHolyLandTour,
            'L_HolyLandTour' => $this->L_HolyLandTour,
            'L_AdjHKTravel' => $this->L_AdjHKTravel,
            'L_PFHKTravel' => $this->L_PFHKTravel,
            'L_HFHKTravel' => $this->L_HFHKTravel,
            'L_AdtnlDHKTravel' => $this->L_AdtnlDHKTravel,
            'L_HKTravel' => $this->L_HKTravel,
            'L_AdjPAFTETour' => $this->L_AdjPAFTETour,
            'L_PFPAFTETour' => $this->L_PFPAFTETour,
            'L_HFPAFTETour' => $this->L_HFPAFTETour,
            'L_AdtnlDPAFTETour' => $this->L_AdtnlDPAFTETour,
            'L_PAFTETour' => $this->L_PAFTETour,
            'L_AdjAsiaPacConfe' => $this->L_AdjAsiaPacConfe,
            'L_PFAsiaPacConfe' => $this->L_PFAsiaPacConfe,
            'L_HFAsiaPacConfe' => $this->L_HFAsiaPacConfe,
            'L_AdtnlDAsiaPacConfe' => $this->L_AdtnlDAsiaPacConfe,
            'L_AsiaPacConfe' => $this->L_AsiaPacConfe,
            'L_AdjParking' => $this->L_AdjParking,
            'L_PFParking' => $this->L_PFParking,
            'L_HFParking' => $this->L_HFParking,
            'L_AdtnlDParking' => $this->L_AdtnlDParking,
            'L_Parking' => $this->L_Parking,
            'L_AdjComputer' => $this->L_AdjComputer,
            'L_PFComputer' => $this->L_PFComputer,
            'L_HFComputer' => $this->L_HFComputer,
            'L_AdtnlDComputer' => $this->L_AdtnlDComputer,
            'L_Computer' => $this->L_Computer,
            'L_AdjOPBasic' => $this->L_AdjOPBasic,
            'L_PFOPBasic' => $this->L_PFOPBasic,
            'L_HFOPBasic' => $this->L_HFOPBasic,
            'L_AdtnlDOPBasic' => $this->L_AdtnlDOPBasic,
            'L_OPBasic' => $this->L_OPBasic,
            'L_AdjOPEFA' => $this->L_AdjOPEFA,
            'L_PFOPEFA' => $this->L_PFOPEFA,
            'L_HFOPEFA' => $this->L_HFOPEFA,
            'L_AdtnlDOPEFA' => $this->L_AdtnlDOPEFA,
            'L_OPEFA' => $this->L_OPEFA,
            'L_AdjOPCOLA' => $this->L_AdjOPCOLA,
            'L_PFOPCOLA' => $this->L_PFOPCOLA,
            'L_HFOPCOLA' => $this->L_HFOPCOLA,
            'L_AdtnlDOPCOLA' => $this->L_AdtnlDOPCOLA,
            'L_OPCOLA' => $this->L_OPCOLA,
            'L_AdjAdjTax' => $this->L_AdjAdjTax,
            'L_PFAdjTax' => $this->L_PFAdjTax,
            'L_HFAdjTax' => $this->L_HFAdjTax,
            'L_AdtnlDAdjTax' => $this->L_AdtnlDAdjTax,
            'L_AdjTax' => $this->L_AdjTax,
            'L_AdjAdjTaxSB' => $this->L_AdjAdjTaxSB,
            'L_PFAdjTaxSB' => $this->L_PFAdjTaxSB,
            'L_HFAdjTaxSB' => $this->L_HFAdjTaxSB,
            'L_AdtnlDAdjTaxSB' => $this->L_AdtnlDAdjTaxSB,
            'L_AdjTaxSB' => $this->L_AdjTaxSB,
            'L_AdjALWOPCOLA' => $this->L_AdjALWOPCOLA,
            'L_PFALWOPCOLA' => $this->L_PFALWOPCOLA,
            'L_HFALWOPCOLA' => $this->L_HFALWOPCOLA,
            'L_AdtnlDALWOPCOLA' => $this->L_AdtnlDALWOPCOLA,
            'L_ALWOPCOLA' => $this->L_ALWOPCOLA,
            'L_AdjALWOPEFA' => $this->L_AdjALWOPEFA,
            'L_PFALWOPEFA' => $this->L_PFALWOPEFA,
            'L_HFALWOPEFA' => $this->L_HFALWOPEFA,
            'L_AdtnlDALWOPEFA' => $this->L_AdtnlDALWOPEFA,
            'L_ALWOPEFA' => $this->L_ALWOPEFA,
            'L_AdjVaccine' => $this->L_AdjVaccine,
            'L_PFVaccine' => $this->L_PFVaccine,
            'L_HFVaccine' => $this->L_HFVaccine,
            'L_AdtnlDVaccine' => $this->L_AdtnlDVaccine,
            'L_Vaccine' => $this->L_Vaccine,
        ]);

        $query->andFilterWhere(['like', 'EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'PrdID', $this->PrdID]);

        return $dataProvider;
    }
}
