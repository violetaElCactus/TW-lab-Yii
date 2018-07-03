<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\cancion */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Cancions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nombre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nombre], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'genero',
            'duracion',
            'anio',
            'compositor',
        ],
    ]) ?>

</div>
