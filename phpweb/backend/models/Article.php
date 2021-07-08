<?php

namespace backend\modules\api\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string|null $id
 * @property string|null $title
 * @property string|null $author
 * @property string|null $category
 * @property string|null $image
 * @property string|null $content
 * @property string|null $description
 * @property string $slug
 * @property string $create_at
 */
class Article extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'content', 'description'], 'string'],
            [['slug'], 'required'],
            [['create_at'], 'safe'],
            [['id', 'title', 'author', 'category', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

//    public function scenarios()
//    {
//        $scenarios = parent::scenarios();
//        $scenarios['create'] = ['id', 'title', 'author', 'category', 'image', 'content', 'description', 'slug', 'create_at'];
//        return $scenarios;
//
//    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'category' => 'Category',
            'image' => 'Image',
            'content' => 'Content',
            'description' => 'Description',
            'slug' => 'Slug',
            'create_at' => 'Create At',
        ];
    }
}
