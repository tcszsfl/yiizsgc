<?php
namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%category}}';
	}
	public static function getnav()
	{
		$nav=Category::find()->orderBy('catid ASC')->all();
		return $nav;
	}
}	
?>






    
    