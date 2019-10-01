<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */

$this->title = $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Other Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="other-deductions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'EmpID',
            'PrdID',
            'FAWU_AF',
            'FAWU_UD',
            'FAWU_WF',
            'HDMF_UPG',
            'HDMF_MPL2',
            'Coop',
            'Tuition',
            'Tour',
            'AlumniTick',
            'ParkingFee',
            'GradExp',
            'TogaRent',
            'StuUniform',
            'Vaccine',
            'OtherDeduc',
            'AdjWTAX',
            'AdjHDMF',
            'AdjPHIC',
            'AdjSSS',
            'OPBasic',
            'OPEFA',
            'OPCOLA',
            'OPBonusXmas',
            'OPBonusMidYr',
            'OPTMP',
            'OPAdvIP',
            'OPAllowIP',
            'OPVLSL',
        ],
    ]) ?>

</div>
