<?php

namespace common\models;

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

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề',
            'author' => 'Tác giả',
            'category' => 'Thể loại',
            'image' => 'Ảnh',
            'content' => 'Nội dung',
            'description' => 'Mô tả ngắn',
            'slug' => 'Đường dẫn tĩnh',
            'create_at' => 'Thời gian tạo',
        ];
    }
}
