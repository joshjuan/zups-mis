<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CashierAccount */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cashier Account',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cashier Accounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cashier-account-update">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - TAARIFA ZA ACCOUNT</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-file"></i> Account Mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Accounts'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
