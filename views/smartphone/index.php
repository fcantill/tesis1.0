<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SmartphoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Smartphones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smartphone-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Smartphone', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_smartphone',
            'imei_smartphone',
            'created',
            'deleted',
            'updated',
            // 'usuario_id_usuario',
            // 'estado_id_estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
