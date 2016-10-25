<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_usuario') ?>

    <?= $form->field($model, 'nombre_usuario') ?>

    <?= $form->field($model, 'contrasena_usuario') ?>

    <?= $form->field($model, 'correo_usuario') ?>

    <?= $form->field($model, 'direccion_usuario') ?>

    <?php // echo $form->field($model, 'rut_usuario') ?>

    <?php // echo $form->field($model, 'apellidoPaterno_usuario') ?>

    <?php // echo $form->field($model, 'apellidoMaterno_usuario') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'perfil_id_perfil') ?>

    <?php // echo $form->field($model, 'horario_id_horario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
