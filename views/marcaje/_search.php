<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarcajeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marcaje-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_marcaje') ?>

    <?= $form->field($model, 'usuario_id_usuario') ?>

    <?= $form->field($model, 'campus_id_campus') ?>

    <?= $form->field($model, 'hora_marcaje') ?>

    <?= $form->field($model, 'puntoGeografico_marcaje') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
