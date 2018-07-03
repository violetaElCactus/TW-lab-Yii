<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\compositorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compositors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compositor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pseudonimo',
            'nombre',
            'apellido',
            'nacionalidad',
            'nacimiento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
