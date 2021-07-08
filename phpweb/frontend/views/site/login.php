<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng nhập';
?>
<div class="site-login" >
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-danger  btn- btn-block', 'name' => 'login-button']) ?>
    </div>
    <p> Or connect with social media</p>
    <div class="form-group">
        <?= Html::submitButton('Sign in with facebook', ['class' => 'btn  btn-info btn-block', 'name' => 'login-button']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Sign in with google', ['class' => 'btn btn-info btn-block', 'name' => 'login-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>-