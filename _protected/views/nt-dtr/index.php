<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NtDtrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Non-Teaching Dtrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-dtr-index">

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
            'NT_DAbsnt',
            'NT_DAbsntRem',
            'NT_HLate',
            //'NT_HUdt',
            //'NT_DLWOP',
            //'NT_DLWOPRem',
            //'NT_OTHReg',
            //'NT_OTHNDReg',
            //'NT_OTHRegExc',
            //'NT_OTHNDRegExc',
            //'NT_OTHSpcl',
            //'NT_OTHNDSpcl',
            //'NT_OTHSpclExc',
            //'NT_OTHNDSpclExc',
            //'NT_OTHLgl',
            //'NT_OTHNDLgl',
            //'NT_OTHLglExc',
            //'NT_OTHNDLglExc',
            //'NT_OTHHolSun',
            //'NT_OTHNDHolSun',
            //'NT_OTHHolSunExc',
            //'NT_OTHNDHolExc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
