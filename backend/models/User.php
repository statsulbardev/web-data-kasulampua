<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $id_provinsi
 * @property int $id_instansi
 * @property int $id_level
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */

    public $authKey = 'dsfdfmjvhsdfgn21554477';
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'id_provinsi', 'id_instansi', 'id_level'], 'required'],
            [['password'], 'string'],
            [['id_provinsi', 'id_instansi', 'id_level'], 'integer'],
            [['username'], 'string', 'max' => 255],
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
            'id_provinsi' => 'Id Provinsi',
            'id_instansi' => 'Id Instansi',
            'id_level' => 'Id Level',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
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
        //mencari user login berdasarkan username dan hanya dicari 1.
        $user = static::find()->where(['username'=>$username])->one(); 
        // if(count($user)){
        if($user){
            return new static($user);
        }
        return null;
    }

    public function validatePassword($password) {
        return $this->password ===  ($password);
    }
}
