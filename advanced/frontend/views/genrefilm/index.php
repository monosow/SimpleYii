<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GenreFilmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genre Films';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-film-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Genre Film', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'genre_id',
            'film_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
