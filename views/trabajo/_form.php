<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trabajo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id_usuario')->textInput() ?>

    <?= $form->field($model, 'campus_id_campus')->textInput() ?>

    <?= $form->field($model, 'horario_trabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
