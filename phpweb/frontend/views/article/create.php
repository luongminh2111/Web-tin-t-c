<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = 'Create Article';
?>
<div class="article-create">
    <div class="col-md-2 aside-left">

    </div>
    <div class="col-md-10 admin-right">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>


</div>
