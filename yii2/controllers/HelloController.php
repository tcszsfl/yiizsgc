<?php
namespace app\controllers;
use yii\web\Controller;
// use yii\web\Requset;
class HelloController extends Controller{

	public function actionIndex(){
		// $request = \Yii::$app->request;
		// echo $get = $request->get('id',1); 
		echo "hello word";
		// $requset->post('name',323);
		// if($requset->isGet){
		// 	echo 'this is get method!';
		// }
	}
}