<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\compositor */

$this->title = $model->pseudonimo;
$this->params['breadcrumbs'][] = ['label' => 'Compositors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pseudonimo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pseudonimo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	<?= Html::a('Canciones',['/cancion/index','idp' => $model->pseudonimo],['class' => 'btn btn-success'])?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pseudonimo',
            'nombre',
            'apellido',
            'nacionalidad',
            'nacimiento',
			[
			'label' => 'Reseña' ,
			'value' => 'La sociedad lo considera una persona poco grata',
			],
	    ],
    ]) ?>
	<?php 
        echo 'Canciones compuestas
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Genero</th>
                        </tr>
                    </thead>
                <tbody>
            ';
        foreach ($model->cancions as $value){
            echo '<tr>
                    <td>'.$value->nombre.'</td>
                    <td>'.$value->genero.'</td>
                </tr>';
        }

        echo '</tbody></table>';
    ?>
</div>
