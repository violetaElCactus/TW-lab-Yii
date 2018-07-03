<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\clase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ataque1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ataque2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ataque3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
