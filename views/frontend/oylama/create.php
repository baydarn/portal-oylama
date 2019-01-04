<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\oylama\models\Ballot */

$this->title = 'Create Ballot';
$this->params['breadcrumbs'][] = ['label' => 'Ballots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ballot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
