<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Device */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'device_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'pass_phrase')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'expiration')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= //$form->field($model, 'deleted_at')->textInput() ?>

    <?php ActiveForm::end(); ?>

</div>
