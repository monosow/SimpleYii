<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenreFilm */

$this->title = 'Create Genre Film';
$this->params['breadcrumbs'][] = ['label' => 'Genre Films', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-film-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
