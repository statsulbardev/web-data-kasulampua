<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Excel $model */

$this->title = 'Upload Excel';
$this->params['breadcrumbs'][] = ['label' => 'Excels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model2' => $model2,
    ]) ?>

</div>
