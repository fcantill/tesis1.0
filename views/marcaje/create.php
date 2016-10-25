<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marcaje */

$this->title = 'Create Marcaje';
$this->params['breadcrumbs'][] = ['label' => 'Marcajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marcaje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
