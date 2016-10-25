<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarcajeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marcajes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marcaje-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Marcaje', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_marcaje',
            'usuario_id_usuario',
            'campus_id_campus',
            'hora_marcaje',
            'puntoGeografico_marcaje',
            // 'created',
            // 'deleted',
            // 'updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
