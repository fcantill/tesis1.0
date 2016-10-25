<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Smartphone */

$this->title = $model->id_smartphone;
$this->params['breadcrumbs'][] = ['label' => 'Smartphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smartphone-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_smartphone], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_smartphone], [
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
            'id_smartphone',
            'imei_smartphone',
            'created',
            'deleted',
            'updated',
            'usuario_id_usuario',
            'estado_id_estado',
        ],
    ]) ?>

</div>
