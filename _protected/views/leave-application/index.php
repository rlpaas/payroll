<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LeaveApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leave Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-application-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Leave Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(['id' => 'leave-application']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'id'=> 'grid',
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],

            'EmpID',
            'type_leave',
            'date_from',
            'date_to',
            //'date_created',
            //'date_updated',
            //'date_approve_head',
            //'date_approve_hrd',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
 <?php Pjax::end() ?>

    <?php
        echo Html::button(
        'Process',
        [
            'class'=>"btn btn-fill btn-primary",
            'onclick' => "approve('#grid', '" . Url::to(['leave-application/process']) . "','#leave-application')"
        ]
        );
    ?>


</div>