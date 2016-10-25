<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Puntogeografico */

$this->title = 'Create Puntogeografico';
$this->params['breadcrumbs'][] = ['label' => 'Puntogeograficos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntogeografico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
