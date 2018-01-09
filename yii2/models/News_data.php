<?php
namespace app\models;

use yii\db\ActiveRecord;

class News_data extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news_data}}';
    }

}