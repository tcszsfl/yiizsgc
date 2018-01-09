<?php
namespace app\controllers;
use yii\web\Controller;
use yii;
use yii\data\Pagination;//分页  
use yii\data\ActiveDataProvider;//活动记录  
use app\models\News;
// use app\models\Category;
// use app\models\Student;

class NewsController extends Controller
{
	public function actionIndex()
	{
	   // $redis=Yii::$app->redis;
    //     // $name=$redis->set('var','sfl');
    //     echo $redis->LPUSH('var','lisr');
    //     exit;


	$list= News::find()->limit(2)->all(); 
    $lists= News::find()->limit(4)->where(['catid'=>18])->orderBy('id')->all(); 
    // echo "<pre>";
    // print_r($list);   
       return $this->render('index',['newslist'=>$list,'newslists'=>$lists]); 
       
	}
    public function actionContent()
     {
      $id=Yii::$app->request->get('id');
       $info=News::find()->joinWith('news_data')->alias('a')->where(['a.id'=>$id])->one();
      return $this->render('content',['ainfo'=>$info]);
     }

     public function actionLinyi()
    {
     
    $list= News::find()->limit(4)->where(['catid'=>18])->orderBy('id')->all(); 
    $ones=News::find()->limit(1)->where(['catid'=>18])->orderBy('id desc')->all(); 
    $lunbo=News::find()->limit(3)->where(['catid'=>18])->orderBy('id')->all();    
     return $this->render('linyi',['newslist'=>$list,'ones'=>$ones,'lunbo'=>$lunbo]);   
    }

    public function actionYule()
    {
     
    $list= News::find()->limit(4)->where(['catid'=>18])->orderBy('id')->all(); 
    $ones=News::find()->limit(1)->where(['catid'=>18])->orderBy('id desc')->all(); 
    $lunbo=News::find()->limit(3)->where(['catid'=>18])->orderBy('id')->all();    
     return $this->render('yule',['newslist'=>$list,'ones'=>$ones,'lunbo'=>$lunbo]);   
    }

}