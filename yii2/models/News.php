<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\News_data;
use app\models\Category;

class News extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%news}}';
	}
    //
    public  function getNews_data()
    {
        return $this->hasOne(News_data::className(),['id'=>'id']);
    }


    //以下待注释
	public static function getnews()
    {
        $news=News::find()->limit(3)->orderBy('catid asc')/*->where('catid=10')*/->all();
        return $news;    
    }

    public static function getones()
    {
        $ones=News::find()->limit(1)->where('catid=17')->orderBy('catid')/*->where('catid=10')*/->all();
        return $ones;    
    }

    public static function getnew()
    {
        $new=News::find()->limit(5)->orderBy('catid desc')/*->where('catid=10')*/->all();
        return $new;    
    }
    public static function getone()
    {
    	$one=News::find()->limit(1)->where('catid=21')->orderBy('catid desc')->all();
    	return $one;
    }
    public static function getshi()
    {
    	$shi=News::find()->limit(2)->where('catid=15')->orderBy('catid asc')->all();
    	return $shi;
    }
    public static function getping()
    {
    	$ping=News::find()->limit(2)->where('catid=20')->orderBy('catid')->all();
    	return $ping;
    }
    public static function getbei()
    {
    	$bei=News::find()->limit(2)->where('catid=16')->orderBy('catid ASC')->all();
    	return $bei;
    }

     public static function getyl()
    {
    	$yl=News::find()->limit(4)->where('catid=20')->orderBy('catid')->all();
    	return $yl;
    }

    public static function getyls()
    {
    	$yl=News::find()->limit(1)->where('catid=22')->orderBy('catid')->all();
    	return $yl;
    }

    public static function photo()
    {
        $photo=News::find()->limit(2)->where('catid=18')->all();
        return $photo;
    }

    public static function photos()
    {
        $photos=News::find()->limit(3)->where('catid=18')->orderBy('id DESC')->all();
        return $photos;
    }

     public static function photoss()
    {
        $photoss=News::find()->limit(3)->where('catid=18')->orderBy('id')->all();
        return $photoss;
    }

    public static function pho()
    {
        $pho=News::find()->limit(2)->where('catid=15')->all();
        return $pho;
    }
}

?>