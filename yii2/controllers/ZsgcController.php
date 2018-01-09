<?php
namespace app\controllers;
use yii;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\Users;
use app\models\LoginForm;
class ZsgcController extends Controller
{	
	//列表
	public function actionIndex()
	{
		 $list=Users::find()->all();
		return $this->render('index',['list'=>$list]);
	}
	//删除
	public function actionDeluser()
	{
	   $id=Yii::$app->request->get('id');
	    $del=Users::find()->where(['id'=>$id])->one();
	   $dels=$del->delete();
	   if($dels==1){
	   	echo "删除成功";
	   }else{
	   	echo "删除失败";
	   }
	}
	//修改
	public function actionUpuser()
	{
		$model= new Users;
		$id=Yii::$app->request->get('id');
		$list=Users::find()->where(['id'=>$id])->one();
		return $this->render('upuser',['model'=>$model,'list'=>$list]);
	}

	//修改处理
	public function actionDoupuser()
	{
		$info=Yii::$app->request->post();
		//yecho "<pre>"; print_r($info['Users']['id']);exit;
	   $model=Users::find()->where(['id'=>$info['Users']['id']])->one();
	   $model->username = $info['Users']['username'];
	   $model->sex = $info['Users']['sex'];     
	   $model->dorm_id = $info['Users']['dorm_id'];
	   $model->iclass = $info['Users']['iclass'];
	   $model->adress = $info['Users']['adress'];
	   $model->major = $info['Users']['major'];
	   $model->famname = $info['Users']['famname'];
	   $model->stutel = $info['Users']['stutel'];
	   $count = $model->update(array('username','sex','dorm_id','iclass','adress','major','famname','stutel'));
	   if($count==1){
	   	echo "修改成功";
	   }else{
	   	echo "修改失败";
	   }
	  

	}
	//添加
	public function actionAdduser()
	{
		$model= new Users;
		return $this->render('adduser',['model'=>$model]);
	}
	//添加处理
	public function actionDoadd()
	{
		$info=Yii::$app->request->post();
		$model=new Users;
		$model->username = $info['Users']['username'];
	    $model->sex = $info['Users']['sex'];     
	    $model->dorm_id = $info['Users']['dorm_id'];
	    $model->iclass = $info['Users']['iclass'];
	    $model->adress = $info['Users']['adress'];
	    $model->major = $info['Users']['major'];
	    $model->famname = $info['Users']['famname'];
	    $model->stutel = $info['Users']['stutel'];
	    $count = $model->save(array('username','sex','dorm_id','iclass','adress','major','famname','stutel'));
		if($count==1){
		   echo "添加成功";
		 }else{
		   echo "添加失败";
		 }

	}	
}
