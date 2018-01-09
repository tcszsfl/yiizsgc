<?php
namespace app\controllers;
use yii\web\Controller;
use yii;
use yii\data\Pagination;//分页  
use yii\data\ActiveDataProvider;//活动记录  
use app\models\News;
use app\models\Users;
use app\models\Category;
// use app\models\Student;
class RnewsController extends Controller
{ 
	public function actionIndex()
	{

		// $redis=Yii::$app->redis;
  //         $list=News::find()->all();
         
  //            foreach($list as $key=>$v)
  //         	 {

  //             $redis->hmset(
  //             	'news:'.$v['id'],
  //             	'id',$v['id'],
  //             	'catid',$v['catid'],
  //             	'title',$v['title'],
  //             	'thumb',$v['thumb'],
  //             	'keywords',$v['keywords'],
  //             	'description',$v['description'],
  //             	'username',$v['username'],
  //             	'inputtime',$v['inputtime']
  //             );

  //             $redis->rpush('catid:'.$v['catid'],$v['id']);

  //            }

 

		$redis=Yii::$app->redis;
        $id=$redis->lrange('catid:18',0,2);
        // print_r($id);exit;
        foreach ($id as $key => $v) 
        {
            $plist[]=$redis->hgetall('news:'.$v);
       }

      //echo "<pre>";print_r($plist);exit;
       $ids=$redis->lrange('catid:18',0,1);
        foreach ($ids as $key => $v) 
        {
            $olist[]=$redis->hgetall('news:'.$v);
       }
       	$aa=$redis->lrange('catid:18',0,3);
        foreach ($aa as $key => $v) 
        {
            $alist[]=$redis->hgetall('news:'.$v);
       }
       	$ww=$redis->lrange('catid:18',0,4);
        foreach ($ww as $key => $v) 
        {
            $wlist[]=$redis->hgetall('news:'.$v);
       }
    // echo "<pre>";print_r($alist);exit;
       return $this->render('index',['plist'=>$plist,'olist'=>$olist,'alist'=>$alist,'wlist'=>$wlist]); 
	}
	public function actionLinyi()
	{

		// $redis=Yii::$app->redis;
		// $list=Category::find()->all();
		// // echo "<pre>";print_r($list);exit;
		// foreach($list as $key => $v)
		// {
		// 	$redis->hmset(
		// 		'category:'.$v['catid'],
		// 		'catid',$v['catid'],
		// 		'catname',$v['catname'],
		// 		'url',$v['url']
		// 	);
		// 	$redis->rpush('catname:'.$v['catid'],$v['catname']);
		// }
		// exit;
		$redis=Yii::$app->redis;
		$ids=$redis->lrange('catnameid',0,1);
		print_r($ids);exit;
		foreach ($ids as $key=> $v) 
		{
			$list[]=$redis->hgetall('category:'.$v);
		}
		echo "<pre>";
		print_r($list);exit;
		return $this->render('linyi');
	}
}