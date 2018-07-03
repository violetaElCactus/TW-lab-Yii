<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\compositor */

$this->title = 'Update Compositor: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Compositors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pseudonimo, 'url' => ['view', 'id' => $model->pseudonimo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compositor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
