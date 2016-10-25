<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Smartphone */

$this->title = 'Create Smartphone';
$this->params['breadcrumbs'][] = ['label' => 'Smartphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smartphone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
