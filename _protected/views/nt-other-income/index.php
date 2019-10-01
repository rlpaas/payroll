<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NtOtherIncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Non-Teaching Other Incomes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-other-income-index">

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
            'NT_AdvIP',
            'NT_HazardPay',
            'NT_Honorarium',
            //'NT_HRMAllowNTax',
            //'NT_HRMAllowTax',
            //'NT_IPAllow',
            //'NT_RLEAllowNTax',
            //'NT_RLEAllowTax',
            //'NT_RFDAlumniTick',
            //'NT_RFDCCLoan',
            //'NT_RFDCOOP',
            //'NT_RFDFAWU',
            //'NT_RFDHDMFMPL',
            //'NT_RFDHDMFP',
            //'NT_RFDHDMFU',
            //'NT_RFDHF',
            //'NT_RFDMedicare',
            //'NT_RFDPHIC',
            //'NT_RFDSSSCondo',
            //'NT_RFDSSSL',
            //'NT_RFDSSSP',
            //'NT_RFDTax',
            //'NT_RFDTaxAdv',
            //'NT_RFDTF',
            //'NT_RFDOthers',
            //'NT_RFDOthersRem',
            //'NT_BNMidYrNTax',
            //'NT_BNMidYrTax',
            //'NT_BNSLVLNTax',
            //'NT_BNSLVLTax',
            //'NT_BNTMPNTax',
            //'NT_BNTMPTax',
            //'NT_BNXmasNTax',
            //'NT_BNXmasTax',
            //'NT_SHSBNTMPNTax',
            //'NT_SHSBNTMPTax',
            //'NT_SSBNMidYrTax',
            //'NT_SSBNSLVLTax',
            //'NT_SSBNTMPTax',
            //'NT_SSBNXmasTax',
            //'NT_BonusNTax',
            //'NT_BonusTax',
            //'NT_AdjIPAllow',
            //'NT_AdviserFee',
            //'NT_BackPay',
            //'NT_BackPayEFA',
            //'NT_BackPayCOLA',
            //'NT_BigClassPay',
            //'NT_CLPPay',
            //'NT_ClassOrgAdvs',
            //'NT_CommOutrchPay',
            //'NT_CommImmersion',
            //'NT_Coordi',
            //'NT_CompreExam',
            //'NT_CriticWork',
            //'NT_DentPreBoard',
            //'NT_DentALE',
            //'NT_Differential',
            //'NT_EnhcmtSeminar',
            //'NT_EnrAdvising',
            //'NT_ExpertisePrm',
            //'NT_ExtProgPay',
            //'NT_Externship',
            //'NT_Goodwill',
            //'NT_GratuityNTax',
            //'NT_GratuityTax',
            //'NT_HardshipPay',
            //'NT_HonorariumNF',
            //'NT_HosptOrient',
            //'NT_IncluProg',
            //'NT_IncentiveLP',
            //'NT_IncrmtlProceeds',
            //'NT_InternshipPay',
            //'NT_MaternityBnft',
            //'NT_OneTimeIncentive',
            //'NT_Practicum',
            //'NT_Proctorship',
            //'NT_ReviewNTax',
            //'NT_ReviewTax',
            //'NT_RICE',
            //'NT_SalarySHS',
            //'NT_SpclExam',
            //'NT_Substitution',
            //'NT_Training',
            //'NT_TranspoAllow',
            //'NT_Tutorial',
            //'NT_OINTax',
            //'NT_OINTaxRem',
            //'NT_OITax',
            //'NT_OITaxRem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
