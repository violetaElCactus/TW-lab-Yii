<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\cancion */

$this->title = 'Update Cancion: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cancions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->nombre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cancion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
