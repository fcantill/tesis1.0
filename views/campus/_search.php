<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CampusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_campus') ?>

    <?= $form->field($model, 'nombre_campus') ?>

    <?= $form->field($model, 'direccion_campus') ?>

    <?= $form->field($model, 'created') ?>

    <?= $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
