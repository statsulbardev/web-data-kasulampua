<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Reset Password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to reset password:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-12 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-12 form-control'],
            'errorOptions' => ['class' => 'col-lg-12 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'newPassword')->passwordInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'repeatPassword')->passwordInput() ?>


        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Reset', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <!-- <div class="offset-lg-1" style="color:#999;">
        Hubungi admin web kasulampua jika ingin menambahkan akun.
    </div> -->
</div>
