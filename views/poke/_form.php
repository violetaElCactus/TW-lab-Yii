<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pokemon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pokemon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Peso')->textInput() ?>

    <?= $form->field($model, 'Color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mote')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
