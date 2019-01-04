<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\oylama\models\Choise */

$this->title = 'Create Choise';
$this->params['breadcrumbs'][] = ['label' => 'Choises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choise-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
