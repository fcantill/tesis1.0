<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PuntogeograficoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puntogeografico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_puntoGeografico') ?>

    <?= $form->field($model, 'radio_puntoGeografico') ?>

    <?= $form->field($model, 'nombre_puntoGeografico') ?>

    <?= $form->field($model, 'created') ?>

    <?= $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'campus_id_campus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
