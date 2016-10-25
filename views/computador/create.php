<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Computador */

$this->title = 'Create Computador';
$this->params['breadcrumbs'][] = ['label' => 'Computadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
