<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AinaYaMatumiziSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Aina Ya Matumizis');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aina-ya-matumizi-index">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - AINA MPYA YA MATUMIZI</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-file"></i> Aina Mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Aina za matumizi'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'matumizi',
            //'aliyeweka',
           // 'muda',

            ['class' => 'yii\grid\ActionColumn','header' => 'Actions'],
        ],
    ]); ?>
</div>
