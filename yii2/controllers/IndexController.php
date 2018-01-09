<?php
namespace app\controllers;
use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use app\models\Users;
use app\models\News;
/**
* 
*/
class IndexController extends Controller
{
	
	//列表
	public function actionIndex()
	{	

		$redis=Yii::$app->redis;
		$pagesize=8;//每页显示条数
		$number=$redis->get('userid');//获取总条数
		$page=Yii::$app->request->get('page')?Yii::$app->request->get('page'):1;
		$ids=$redis->lrange('uid',$pagesize*($page-1),$pagesize*$page-1);
		// echo "<pre>";
		// print_r($ids);exit;
		foreach ($ids as $key => $v) 
		{
			$plist[]=$redis->hgetall('user:'.$v);
			$plist[$key]['uid']=$v;

		}
			// echo "<pre>";
			// print_r($plist);exit;
		return $this->render('index',['plist'=>$plist,'page'=>$page]);

		// 向redis添加储存数据
		// $redis=Yii::$app->redis;
		//  $list=Users::find()->all();
		//  echo "<pre>";
		//  print_r($list);exit;
		// foreach ($list as $key => $v)
		//  {
		//  	命令将 key 中储存的数字值增一。
		//   	$redis->incr('userid');
		//   	
		//   	命令用于同时将多个 field-value (字段-值)对设置到哈希表中。
		//   	$redis->hmset('user:'.$key, 
		//   		'id',$v['id'],
		//   		'username',$v['username'],
		//   		'sex',$v['sex'],
		//   		'dorm_id',$v['dorm_id'],
		//   		'adress',$v['adress'],
		//   		'nation',$v['nation'],
		//   		'stutel',$v['stutel'],
		//   		'idcate',$v['idcate']
		//   	);
		//   	//创建一个列表与哈希对象关联
		//   	$redis->rpush('uid',$key);
		//   }  		
	}
	//添加
	public function actionAdd()
	{
		$model= new Users;
		return $this->render('adduser',['model'=>$model]);

	}
	//添加处理
	public function actionAdduser()
	{
		//接收前台所填入的数据
		$list=Yii::$app->request->post();
		 // echo "<pre>"; print_r($list);exit;
		$redis=Yii::$app->redis;

		//记录添加的数量
		$redis->incr('usercount');
		$count=$redis->get('usercount')+1;
		
		$add=$redis->hmset
		(
			'user:'.$count,
			'id',$count,
			'username',$list['Users']['username'],
             'sex',$list['Users']['sex'],
             'adress',$list['Users']['adress'],
             'nation',$list['Users']['nation'],
              'idcate',$list['Users']['idcate'],
              'dorm_id',$list['Users']['dorm_id'],
              'stutel',$list['Users']['stutel']
               
		);
		// echo "<pre>";print_r($add);exit;
		$redis->rpush('uid',$count);
		if($add ==1){
			echo "success";
		}else{
			echo "fail";
		}


	}
		//修改
		public function  actionUpdate()
		{
				$model=new Users;
			   $redis=Yii::$app->redis;
			   $ids=yii::$app->request->get('id');//获取前台页面提交的id
			  // echo "<pre>";print_r($ids);exit;
			   $id=$ids-2;
			   $list=$redis->hgetall('user:'.$id);
		    // echo "<pre>";print_r($list);exit;
		return $this->render('update',['model'=>$model,'list'=>$list]);

        }
        //修改处理
        public function actionData()
        {

	     $redis=Yii::$app->redis;
		 $list = Yii::$app->request->post();//获取前台页面编辑点击所提交的数据

		   $id=$list['Users']['id']; //修改提交后的id值
	   	 $info=$redis->hmset(
	   		 	'user:'.$id,
	   		 'username',$list['Users']['username'],
              'sex',$list['Users']['sex'],
              'adress',$list['Users']['adress'],
              'nation',$list['Users']['nation'],
               'idcate',$list['Users']['idcate'],
               'dorm_id',$list['Users']['dorm_id'],
               'stutel',$list['Users']['stutel']
           );
	  	 if ($info==1) {
	 	  echo "success";
	 	  }
	 	 else{
	  		echo "fail";
	  		}
		}
		//删除
		public function actionDeluser()
   		{
	        $id=Yii::$app->request->get('id');
	        // echo "<pre>";print_r($id);exit;
	        $redis=Yii::$app->redis;
	        if($id!=''){
	        	$redis->del('user:'.$id);
	        	echo "succ";
	        }else{
	        	echo "fail";
	        }
	        
	        $redis->lrem('uid',1,$id);//根据参数 COUNT 的值，移除列表中与参数 VALUE 相等的元素。
	        $redis->decr('userid');//Decr 命令将 key 中储存的数字值减一。
    	}

    	public function 


}