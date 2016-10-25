<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Computador */

$this->title = $model->id_computador;
$this->params['breadcrumbs'][] = ['label' => 'Computadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_computador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_computador], [
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
            'id_computador',
            'mac_computador',
            'created',
            'deleted',
            'updated',
            'estado_id_estado',
            'usuario_id_usuario',
        ],
    ]) ?>

</div>
