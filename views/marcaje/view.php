<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Marcaje */

$this->title = $model->id_marcaje;
$this->params['breadcrumbs'][] = ['label' => 'Marcajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marcaje-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_marcaje], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_marcaje], [
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
            'id_marcaje',
            'usuario_id_usuario',
            'campus_id_campus',
            'hora_marcaje',
            'puntoGeografico_marcaje',
            'created',
            'deleted',
            'updated',
        ],
    ]) ?>

</div>
