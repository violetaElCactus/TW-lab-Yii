<?php

use yii\helpers\Html;
$fid = Yii::$app->getRequest()->getQueryParam('fid');

/* @var $this yii\web\View */
/* @var $model app\models\cancion */

$this->title = 'Create Cancion';
$this->params['breadcrumbs'][] = ['label' => 'Cancions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
