<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Wafanyakazi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wafanyakazis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wafanyakazi-view">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - TAARIFA ZA MFANYAKAZI</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-user"></i> Mfanyakazi Mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Wafanyakazi'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'jina_kamili',
            [
                'attribute' => 'department_id',
                'value' => function ($model){
                    if($model->department_id == null){
                        return ' ';
                    }else{
                        return $model->department->jina;
                    }
                }
            ],
            [
                'attribute' => 'mkoa_id',
                'value' => function ($model){
                    if($model->mkoa_id == null){
                        return ' ';
                    }else{
                        return $model->mkoa->jina;
                    }
                }
            ],
            [
                'attribute' => 'wilaya_id',
                'value' => function ($model){
                    if($model->wilaya_id == null){
                        return ' ';
                    }else{
                        return $model->wilaya->jina;
                    }
                }
            ],
            [
                'attribute' => 'report_to',
                'value' => function ($model){
                    if($model->report_to == null){
                        return ' ';
                    }else{
                        return $model->report_to;
                    }
                }
            ],
            'aliyeweka',
            'muda',
        ],
    ]) ?>

</div>
