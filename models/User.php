<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\web\Link; // represents a link object as defined in JSON Hypermedia API Language.
use yii\web\Linkable;
use yii\helpers\Url;

/**
 * This is the model class for table "User".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface ,Linkable
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password','email', 'authKey', 'accessToken'], 'required'],
            [['username', 'password', 'email','authKey', 'accessToken'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
    public function fields()
    {
        return [
            // 字段名和属性名相同
            'id',
            // 字段名为"email", 对应的属性名为"email_address"
            'email' ,
            // 字段名为"name", 值由一个PHP回调函数定义
            'name' => 'username',
        ];
    }
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
            'edit' => Url::to(['user/view', 'id' => $this->id], true),
          //'profile' => Url::to(['country/view'], true),
            //'index' => Url::to(['users'], true),
        ];
    }
    public function extraFields()
    {
        return ['authKey'];
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['accessToken' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
