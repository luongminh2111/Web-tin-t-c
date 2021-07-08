<?php


namespace frontend\controllers;


use common\models\Article;
use yii\rest\ActiveController;

class ArticlerestController extends ActiveController
{
    public $modelClass = Article::class;
    public function behaviors(){
        $behaviors = parent::behaviors();
        return $behaviors;
    }
}