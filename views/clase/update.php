<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\clase */

$this->title = 'Update Clase: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Clases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tipo, 'url' => ['view', 'id' => $model->Tipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
