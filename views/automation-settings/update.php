<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AutomationSettings */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Automation Settings',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Automation Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="automation-settings-update">
    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-gear"></i> ZUPS - AUTOMATION SETTINGS</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-file"></i> Setting mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya settings'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
