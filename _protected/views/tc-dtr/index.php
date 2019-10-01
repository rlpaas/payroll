<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TcDtrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Dtrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-dtr-index">

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
            'UG_HAbsntLec',
            'UG_HAbsntLecRem',
            'UG_HCMTLec',
            //'UG_HCMTLecRem',
            //'UG_HLWOPLec',
            //'UG_HLWOPLecRem',
            //'UG_HAbsntLab',
            //'UG_HAbsntLabRem',
            //'UG_HCMTLab',
            //'UG_HCMTLabRem',
            //'UG_HLWOPLab',
            //'UG_HLWOPLabRem',
            //'UG_HAbsntClc',
            //'UG_HAbsntClcRem',
            //'UG_HCMTClc',
            //'UG_HCMTClcRem',
            //'UG_HLWOPClc',
            //'UG_HLWOPClcRem',
            //'GS_HAbsntLec',
            //'GS_HAbsntLecRem',
            //'GS_HCMTLec',
            //'GS_HCMTLecRem',
            //'GS_HLWOPLec',
            //'GS_HLWOPLecRem',
            //'GS_HAbsntLab',
            //'GS_HAbsntLabRem',
            //'GS_HCMTLab',
            //'GS_HCMTLabRem',
            //'GS_HLWOPLab',
            //'GS_HLWOPLabRem',
            //'GS_HAbsntClc',
            //'GS_HAbsntClcRem',
            //'GS_HCMTClc',
            //'GS_HCMTClcRem',
            //'GS_HLWOPClc',
            //'GS_HLWOPClcRem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
