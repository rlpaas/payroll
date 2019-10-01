<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TotherIncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Other Income';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tother-income-index">

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
            'TC_AdvIP',
            'TC_HazardPay',
            'TC_Honorarium',
            //'TC_HRMAllowNTax',
            //'TC_HRMAllowTax',
            //'TC_IPAllow',
            //'TC_RLEAllowNTax',
            //'TC_RLEAllowTax',
            //'TC_RFDAlumniTick',
            //'TC_RFDCCLoan',
            //'TC_RFDCOOP',
            //'TC_RFDFAWU',
            //'TC_RFDHDMFMPL',
            //'TC_RFDHDMFP',
            //'TC_RFDHDMFU',
            //'TC_RFDHF',
            //'TC_RFDMedicare',
            //'TC_RFDPHIC',
            //'TC_RFDSSSCondo',
            //'TC_RFDSSSL',
            //'TC_RFDSSSP',
            //'TC_RFDTax',
            //'TC_RFDTaxAdv',
            //'TC_RFDTF',
            //'TC_RFDOthers',
            //'TC_RFDOthersRem',
            //'TC_BNMidYrNTax',
            //'TC_BNMidYrTax',
            //'TC_BNSLVLNTax',
            //'TC_BNSLVLTax',
            //'TC_BNTMPNTax',
            //'TC_BNTMPTax',
            //'TC_BNXmasNTax',
            //'TC_BNXmasTax',
            //'TC_SHSBNTMPNTax',
            //'TC_SHSBNTMPTax',
            //'TC_SSBNMidYrTax',
            //'TC_SSBNSLVLTax',
            //'TC_SSBNTMPTax',
            //'TC_SSBNXmasTax',
            //'TC_BonusNTax',
            //'TC_BonusTax',
            //'TC_AdjIPAllow',
            //'TC_AdviserFee',
            //'TC_BackPay',
            //'TC_BackPayEFA',
            //'TC_BackPayCOLA',
            //'TC_BigClassPay',
            //'TC_CLPPay',
            //'TC_ClassOrgAdvs',
            //'TC_CommOutrchPay',
            //'TC_CommImmersion',
            //'TC_Coordi',
            //'TC_CompreExam',
            //'TC_CriticWork',
            //'TC_DentPreBoard',
            //'TC_DentALE',
            //'TC_Differential',
            //'TC_EnhcmtSeminar',
            //'TC_EnrAdvising',
            //'TC_ExpertisePrm',
            //'TC_ExtProgPay',
            //'TC_Externship',
            //'TC_Goodwill',
            //'TC_GratuityNTax',
            //'TC_GratuityTax',
            //'TC_HardshipPay',
            //'TC_HolidayPay',
            //'TC_HonorariumNF',
            //'TC_HosptOrient',
            //'TC_IncluProg',
            //'TC_IncentiveLP',
            //'TC_IncrmtlProceeds',
            //'TC_InternshipPay',
            //'TC_MaternityBnft',
            //'TC_OneTimeIncentive',
            //'TC_Practicum',
            //'TC_Proctorship',
            //'TC_ReviewNTax',
            //'TC_ReviewTax',
            //'TC_RICE',
            //'TC_SalarySHS',
            //'TC_SpclExam',
            //'TC_Substitution',
            //'TC_Training',
            //'TC_TranspoAllow',
            //'TC_Tutorial',
            //'TC_OINTax',
            //'TC_OINTaxRem',
            //'TC_OITax',
            //'TC_OITaxRem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
