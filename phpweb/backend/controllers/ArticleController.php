<?php


namespace backend\controllers;


use yii\rest\ActiveController;

class ArticleController extends ActiveController
{
    public $modelClass = 'backend\models\Article';
}