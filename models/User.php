<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ext_user".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $mail
 * @property string $phone
 * @property string $company
 * @property integer $pro
 * @property string $joined
 * @property string $last_visit
 * @property integer $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mail'], 'required', 'on' => 'register'],
            [['name', 'surname', 'mail'], 'required', 'on' => 'complete'],
            ['mail', 'unique'],
            [['mail'], 'email'],
            [['pro', 'status'], 'integer'],
            [['authkey', 'name', 'surname', 'mail', 'phone', 'company', 'joined', 'last_visit'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/user', 'ID'),
            'name' => Yii::t('app/user', 'name'),
            'surname' => Yii::t('app/user', 'surname'),
            'mail' => Yii::t('app/user', 'mail'),
            'phone' => Yii::t('app/user', 'phone'),
            'company' => Yii::t('app/user', 'company'),
            'pro' => Yii::t('app/user', 'pro'),
            'joined' => Yii::t('app/user', 'joined'),
            'last_visit' => Yii::t('app/user', 'last_visit'),
            'status' => Yii::t('app/user', 'status'),
            'authkey' => Yii::t('app/user', 'authkey'),
        ];
    }

    public function validateAuthKey($authkey)
    {
        return $this->authkey === $authkey;
    }

    public function generateAuthKey()
    {
        $mail = $this->mail;
        $query = self::find();
        $user = $query
            ->where(['status' => 0, 'mail' => $mail])
            ->one();

        if(!$user){
            throw new \HttpException(500, 'Request failed!');
        }

        $authkey = \yii\helpers\Security::generateRandomKey();

        $this->saveAuthKey($user, $authkey);

        return $authkey;
    }

    public function saveAuthKey($user, $authkey)
    {
        $user->authkey = $authkey;
        $user->save();
    }
}
