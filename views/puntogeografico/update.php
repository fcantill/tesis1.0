<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Puntogeografico */

$this->title = 'Update Puntogeografico: ' . $model->id_puntoGeografico;
$this->params['breadcrumbs'][] = ['label' => 'Puntogeograficos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_puntoGeografico, 'url' => ['view', 'id' => $model->id_puntoGeografico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="puntogeografico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
