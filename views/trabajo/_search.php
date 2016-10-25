<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrabajoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trabajo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_trabajo') ?>

    <?= $form->field($model, 'usuario_id_usuario') ?>

    <?= $form->field($model, 'campus_id_campus') ?>

    <?= $form->field($model, 'horario_trabajo') ?>

    <?= $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
