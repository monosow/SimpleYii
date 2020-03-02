<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProducerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Producer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
