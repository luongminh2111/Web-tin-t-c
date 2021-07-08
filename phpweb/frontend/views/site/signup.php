<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup" >
    <h1><?= Html::encode($this->title)  ?></h1>

    <div class="container">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'phone')->textInput(['autofocus' => true]) ?>
        </div>
        <div class="col-lg-6">

            <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'confirmPassword')->passwordInput() ?>
        </div>
        <div class="col-lg-6" style="margin-left: 0px; width: max-content">
            <?= $form->field($model, 'accept')->checkbox(['label'=>'Tôi đồng ý với tất cả các điều khoản và dịch vụ', 'uncheck'=>null])?>
        </div>
        <div class="col-lg-6" style="margin-left: 180px; margin-top: 20px">
            <div class="form-group" >
                <?= Html::submitButton('Signup', ['class' => 'btn btn-success btn-block', 'name' => 'signup-button']) ?>
            </div>
        </div>
            <?php ActiveForm::end(); ?>
    </div>
</div>
