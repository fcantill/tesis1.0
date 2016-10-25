<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrabajoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trabajos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trabajo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trabajo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_trabajo',
            'usuario_id_usuario',
            'campus_id_campus',
            'horario_trabajo',
            'created',
            // 'deleted',
            // 'updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
