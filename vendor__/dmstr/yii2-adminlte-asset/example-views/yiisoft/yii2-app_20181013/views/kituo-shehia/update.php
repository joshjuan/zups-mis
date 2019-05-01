<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KituoShehia */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Kituo Shehia',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kituo Shehias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kituo-shehia-update">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - VITUO NA SHEHIA</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-retweet"></i> Unganisha'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Vituo na shehia'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
