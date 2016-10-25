<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Campus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
