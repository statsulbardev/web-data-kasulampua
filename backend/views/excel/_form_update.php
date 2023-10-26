<?php

use app\models\JenisExcel;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Excel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="excel-form">

    <?php //$form = ActiveForm::begin(); ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'path')->textInput() ?>

    <?= $form->field($model, 'uploaded_by')->textInput() ?>

    <?= $form->field($model, 'approved_by')->textInput() ?>

    <!-- //$form->field($model, 'jenis_excel')->textInput() -->
    <?= $form->field($model, 'jenis_excel')->dropDownList(ArrayHelper::map(JenisExcel::find()->all(), 'id', 'nama')) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>