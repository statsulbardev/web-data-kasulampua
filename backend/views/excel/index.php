<?php

use app\models\Excel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Excel Kasulampua';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Upload Excel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'path',
            // 'uploaded_by',
            [
                'attribute' => 'uploaded_by',
                'label' => 'Uploaded By',
                'value' => 'uploadedBy.username'
            ],
            // 'approved_by',
            [
                'attribute' => 'approved_by',
                'label' => 'Approved By',
                'value' => 'approvedBy.username'
            ],
            // 'jenis_excel',
            [
                'attribute' => 'jenis_excel',
                'label' => 'Jenis Excel',
                'value' => 'jenisExcel.nama'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Excel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                // 'template' => '{view} {update} {delete} {approve}',  // the default buttons + your custom button
                'template' => '{view} {approve} {delete}',  // the default buttons + your custom button
                'buttons' => [
                    'approve' => function($url, $model, $key) {     // render your custom button
                        $options = ['title' => 'approve', 'style' => 'margin-top:-10px;'];
                        return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg>', $url, $options);
                    }
                 ]
            ],
        ],
    ]); ?>
    <b>*Penamaan file excel harus jelas menggunakan format "judul tabel, tahun.xlsx"</b>
    <br/>
    <b>*Catatan excel yang ditampilkan difrontend web kasulampua hanya excel yang sudah diapprove oleh admin (kolom Approved By terisi)</b>
    <br/>
    <b>*Tidak ada proses unapprove, admin dimohon memeriksa kembali tabel excel yang diupload user menggunakan menu view sebelum approval dilakukan</b>
</div>
