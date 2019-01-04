<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\oylama\models\Results */

$this->title = 'Update Results: ' . $model->result_id;
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->result_id, 'url' => ['view', 'id' => $model->result_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="results-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
