<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cancionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cancion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'genero') ?>

    <?= $form->field($model, 'duracion') ?>

    <?= $form->field($model, 'anio') ?>

    <?= $form->field($model, 'compositor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
