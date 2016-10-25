<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Puntogeografico */

$this->title = $model->id_puntoGeografico;
$this->params['breadcrumbs'][] = ['label' => 'Puntogeograficos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntogeografico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_puntoGeografico], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_puntoGeografico], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_puntoGeografico',
            'radio_puntoGeografico',
            'nombre_puntoGeografico',
            'created',
            'deleted',
            'updated',
            'campus_id_campus',
        ],
    ]) ?>

</div>
