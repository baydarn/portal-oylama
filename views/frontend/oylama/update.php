<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\oylama\models\Ballot */

$this->title = 'Update Ballot: ' . $model->ballot_id;
$this->params['breadcrumbs'][] = ['label' => 'Ballots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ballot_id, 'url' => ['view', 'id' => $model->ballot_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ballot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
