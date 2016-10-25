<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PuntogeograficoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Puntogeograficos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntogeografico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Puntogeografico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_puntoGeografico',
            'radio_puntoGeografico',
            'nombre_puntoGeografico',
            'created',
            'deleted',
            // 'updated',
            // 'campus_id_campus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
