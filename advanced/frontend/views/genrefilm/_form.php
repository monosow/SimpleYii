<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenreFilm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="genre-film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'genre_id')->textInput() ?>

    <?= $form->field($model, 'film_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
