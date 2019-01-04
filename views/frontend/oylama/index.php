<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\oylama\models\BallotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ballots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ballot-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ballot', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ballot_id',
            'ballot_type',
            'user_type',
            'user_id',
            'ballot_started',
            //'ballot_ended',
            //'ballot_created',
            //'choise_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
