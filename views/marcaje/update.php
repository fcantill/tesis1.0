<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marcaje */

$this->title = 'Update Marcaje: ' . $model->id_marcaje;
$this->params['breadcrumbs'][] = ['label' => 'Marcajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_marcaje, 'url' => ['view', 'id' => $model->id_marcaje]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marcaje-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
