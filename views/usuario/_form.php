<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contrasena_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rut_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidoPaterno_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidoMaterno_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'updated')->textInput() ?>

    <?= $form->field($model, 'perfil_id_perfil')->textInput() ?>

    <?= $form->field($model, 'horario_id_horario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
