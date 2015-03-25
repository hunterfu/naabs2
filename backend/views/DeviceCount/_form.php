<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DeviceCountOptions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-count-options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key')->label('Count') ?>

    <?= $form->field($model, 'value')->textInput()->label('Value') ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => 5])->label('Price') ?>

    <?= $form->field($model, 'created')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'updated')->textInput(['disabled' => true]) ?>

    <?php //$form->field($model, 'deleted')->textInput(['disabled' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
