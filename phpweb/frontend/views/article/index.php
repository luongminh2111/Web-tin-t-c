
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index ">
    <div class="container-sm">
        <div class="row">
            <div class="col-md-2 aside-left " >
                <div class="panel panel-primary" style="height: 955px">
                    <div class="panel-body">
                        <div class="list-group">
                            <li class="list-group-item">
                                <?= Html::a('Trang chu',['/site']);?>
                            </li>
                            <li class="list-group-item">
                                <?= Html::a('Quản lí bài báo',['/site']);?>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 admin-right">
                <h1><?= Html::encode($this->title) ?></h1>
                <p>
                    <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
              <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'title',
                        'category',
//                        'author',
//                        'image',
//                        'description:ntext',
//                        'content:ntext',
//                        'slug',
//                        'create_at',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </div>

</div>
