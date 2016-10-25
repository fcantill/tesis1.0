<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SmartphoneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="smartphone-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_smartphone') ?>

    <?= $form->field($model, 'imei_smartphone') ?>

    <?= $form->field($model, 'created') ?>

    <?= $form->field($model, 'deleted') ?>

    <?= $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'usuario_id_usuario') ?>

    <?php // echo $form->field($model, 'estado_id_estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
