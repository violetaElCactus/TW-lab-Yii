<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\pokemon */

$this->title = $model->Nombre;
$this->params['breadcrumbs'][] = ['label' => 'Pokemons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokemon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Nombre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Nombre], [
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
            'Nombre',
            'Peso',
            'Color',
            'Mote',
        ],
    ]) ?>

</div>
