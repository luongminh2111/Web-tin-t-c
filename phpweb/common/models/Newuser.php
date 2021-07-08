<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "newuser".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $username
 * @property string|null $password
 * @property string|null $confirmPassword
 * @property int|null $gender
 */
class Newuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender'], 'integer'],
            [['name', 'email', 'username', 'password', 'confirmPassword'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'username' => 'Username',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password',
            'gender' => 'Gender',
        ];
    }
}
