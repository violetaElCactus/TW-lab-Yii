<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PokemonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pokemons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokemon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pokemon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nombre',
            'Peso',
            'Color',
            'Mote',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
