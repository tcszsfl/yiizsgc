<?php

namespace app\models;

use Yii;


class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
    
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iclass', 'bed', 'status'], 'integer'],
            [['birthday'], 'safe'],
            [['username'], 'string', 'max' => 255],
            [['sex'], 'string', 'max' => 3],
            [['idcate'], 'string', 'max' => 18],
            [['dorm_id'], 'string', 'max' => 5],
            [['adress', 'hujiadress', 'weixin'], 'string', 'max' => 50],
            [['nation', 'famname'], 'string', 'max' => 15],
            [['major', 'qq'], 'string', 'max' => 10],
            [['photo'], 'string', 'max' => 200],
            [['stutel', 'famtel'], 'string', 'max' => 11],
            [['email', 'pro', 'city', 'area'], 'string', 'max' => 20],
            [['rili'], 'string', 'max' => 2],
            [['openid'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '姓名',
            'sex' => '性别',
            'idcate' => '身份证号码',
            'dorm_id' => '宿舍',
            'iclass' => '班级',
            'adress' => '家庭住址',
            'nation' => '民族',
            'major' => '专业',
            'birthday' => '出生日期',
            'photo' => '头像',
            'famname' => '家长姓名',
            'hujiadress' => '户籍所在地',
            'stutel' => '学生手机号',
            'weixin' => '微信号',
            'qq' => 'QQ号',
            'email' => '邮箱',
            'famtel' => '家长手机号',
            'pro' => '省',
            'city' => '市',
            'area' => '区',
            'rili' => '阴历阳历',
            'bed' => '床位',
            'openid' => '微信唯一标识',
            'status' => '是否被锁定',
        ];
    }

    /**
     * @inheritdoc
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
