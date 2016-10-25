<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComputadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Computador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_computador',
            'mac_computador',
            'created',
            'deleted',
            'updated',
            // 'estado_id_estado',
            // 'usuario_id_usuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
