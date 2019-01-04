<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\oylama\models\BallotSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ballot-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ballot_id') ?>

    <?= $form->field($model, 'ballot_type') ?>

    <?= $form->field($model, 'user_type') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'ballot_started') ?>

    <?php // echo $form->field($model, 'ballot_ended') ?>

    <?php // echo $form->field($model, 'ballot_created') ?>

    <?php // echo $form->field($model, 'choise_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
