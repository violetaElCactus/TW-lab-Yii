<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\cancionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$fid = Yii::$app->getRequest()->getQueryParam('idp');
$this->title = 'Cancions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cancion', ['create', 'fid' => $fid], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            'genero',
            'duracion',
            'anio',
            'compositor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
