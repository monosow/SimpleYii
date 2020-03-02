<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Producer */

$this->title = 'Create Producer';
$this->params['breadcrumbs'][] = ['label' => 'Producers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
