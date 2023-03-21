<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Excel $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Excels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$url = Yii::$app->basePath.'/lib/upload.php';
include $url;
?>
<div class="excel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'path',
            // 'uploaded_by',
            // 'approved_by',
            // 'jenis_excel',
            [
                'attribute' => 'uploaded_by',
                'label' => 'Uploaded By',
                'value' => $model->uploadedBy->username
            ],
            // 'approved_by',
            [
                'attribute' => 'approved_by',
                'label' => 'Approved By',
                'value' => is_null($model->approvedBy)? null:$model->approvedBy->username
            ],
            // 'jenis_excel',
            [
                'attribute' => 'jenis_excel',
                'label' => 'Jenis Excel',
                'value' => $model->jenisExcel->nama
            ],
        ],
    ]) ?>

    <div>
        <h1>Excel Preview</h1>
        <?php
            // echo ($model->path);
            echo excelToHTML($model->path);
        ?>
    </div>

</div>
