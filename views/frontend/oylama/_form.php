<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\oylama\models\Ballot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ballot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ballot_type')->dropDownList([ 'active' => 'Active', 'passive' => 'Passive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user_type')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'ballot_started')->textInput() ?>

    <?= $form->field($model, 'ballot_ended')->textInput() ?>

    <?= $form->field($model, 'ballot_created')->textInput() ?>

    <?= $form->field($model, 'choise_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
