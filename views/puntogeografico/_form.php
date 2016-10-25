<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Puntogeografico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puntogeografico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'radio_puntoGeografico')->textInput() ?>

    <?= $form->field($model, 'nombre_puntoGeografico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'updated')->textInput() ?>

    <?= $form->field($model, 'campus_id_campus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
