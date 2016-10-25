<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Smartphone */

$this->title = 'Update Smartphone: ' . $model->id_smartphone;
$this->params['breadcrumbs'][] = ['label' => 'Smartphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_smartphone, 'url' => ['view', 'id' => $model->id_smartphone]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="smartphone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
