<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'activity') ?>

    <?= $form->field($model, 'module') ?>

    <?= $form->field($model, 'action') ?>

    <?= $form->field($model, 'old') ?>

    <?php // echo $form->field($model, 'new') ?>

    <?php // echo $form->field($model, 'maker') ?>

    <?php // echo $form->field($model, 'maker_time') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
