<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\claseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Tipo') ?>

    <?= $form->field($model, 'Ataque1') ?>

    <?= $form->field($model, 'Ataque2') ?>

    <?= $form->field($model, 'Ataque3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
