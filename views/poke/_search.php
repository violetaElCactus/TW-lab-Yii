<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pokemonits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pokemon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Peso') ?>

    <?= $form->field($model, 'Color') ?>

    <?= $form->field($model, 'Mote') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
