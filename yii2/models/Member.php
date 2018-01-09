<?php
namespace app\models;

use yii\db\ActiveRecord;

class Member extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%member}}';
	}
}

?>