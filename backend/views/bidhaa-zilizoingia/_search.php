<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BidhaaZilizoingiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidhaa-zilizoingia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tarehe_ya_kuingia') ?>

    <?= $form->field($model, 'bidhaa_id') ?>

    <?= $form->field($model, 'jina_aliyeleta') ?>

    <?= $form->field($model, 'idadi') ?>

    <?php // echo $form->field($model, 'jumla') ?>

    <?php // echo $form->field($model, 'aliyepokea') ?>

    <?php // echo $form->field($model, 'aliyeingiza') ?>

    <?php // echo $form->field($model, 'muda') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
