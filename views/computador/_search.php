<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComputadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="computador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_computador') ?>

    <?= $form->field($model, 'mac_computador') ?>

    <?= $form->field($model, 'created') ?>

    <?= $form->field($model, 'deleted') ?>

    <?= $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'estado_id_estado') ?>

    <?php // echo $form->field($model, 'usuario_id_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
