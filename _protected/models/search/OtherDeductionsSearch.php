<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OtherDeductions;

/**
 * OtherDeductionsSearch represents the model behind the search form of `app\models\OtherDeductions`.
 */
class OtherDeductionsSearch extends OtherDeductions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'safe'],
            [['FAWU_AF', 'FAWU_UD', 'FAWU_WF', 'HDMF_UPG', 'HDMF_MPL2', 'Coop', 'Tuition', 'Tour', 'AlumniTick', 'ParkingFee', 'GradExp', 'TogaRent', 'StuUniform', 'Vaccine', 'OtherDeduc', 'AdjWTAX', 'AdjHDMF', 'AdjPHIC', 'AdjSSS', 'OPBasic', 'OPEFA', 'OPCOLA', 'OPBonusXmas', 'OPBonusMidYr', 'OPTMP', 'OPAdvIP', 'OPAllowIP', 'OPVLSL'], 'number'],
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
        $query = OtherDeductions::find();

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
            'FAWU_AF' => $this->FAWU_AF,
            'FAWU_UD' => $this->FAWU_UD,
            'FAWU_WF' => $this->FAWU_WF,
            'HDMF_UPG' => $this->HDMF_UPG,
            'HDMF_MPL2' => $this->HDMF_MPL2,
            'Coop' => $this->Coop,
            'Tuition' => $this->Tuition,
            'Tour' => $this->Tour,
            'AlumniTick' => $this->AlumniTick,
            'ParkingFee' => $this->ParkingFee,
            'GradExp' => $this->GradExp,
            'TogaRent' => $this->TogaRent,
            'StuUniform' => $this->StuUniform,
            'Vaccine' => $this->Vaccine,
            'OtherDeduc' => $this->OtherDeduc,
            'AdjWTAX' => $this->AdjWTAX,
            'AdjHDMF' => $this->AdjHDMF,
            'AdjPHIC' => $this->AdjPHIC,
            'AdjSSS' => $this->AdjSSS,
            'OPBasic' => $this->OPBasic,
            'OPEFA' => $this->OPEFA,
            'OPCOLA' => $this->OPCOLA,
            'OPBonusXmas' => $this->OPBonusXmas,
            'OPBonusMidYr' => $this->OPBonusMidYr,
            'OPTMP' => $this->OPTMP,
            'OPAdvIP' => $this->OPAdvIP,
            'OPAllowIP' => $this->OPAllowIP,
            'OPVLSL' => $this->OPVLSL,
        ]);

        $query->andFilterWhere(['like', 'EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'PrdID', $this->PrdID]);

        return $dataProvider;
    }
}
