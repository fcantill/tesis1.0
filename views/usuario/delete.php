<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'nombre_usuario',
            'rut_usuario',
            // 'apellidoPaterno_usuario',
            // 'apellidoMaterno_usuario',
            // 'created',
            // 'deleted',
            // 'updated',
            // 'perfil_id_perfil',
            // 'horario_id_horario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
