<?php
namespace app\controllers;

use yii\web\Controller;
use yii;
use app\models\Forms;
use app\models\News;
// use app\models\Student;

class NameController extends Controller
{
	public function actionIndex()
	{
		$sql =yii::$app->db->createCommand('select * from {{%news}} WHERE catid=10')->queryAll();

        return $this->render('index',['news'=>$sql]);
		// $table=Student::find()->all();
		// echo "<pre>";
		// print_r($table);exit;
		// $query = Student::find()->where(['LIKE', 'name', 'ad%', false]);
		// $commandQuery=clone $query;
		// echo $commandQuery->createCommand()->getRawSql();EXIT;
		// $model=new Forms;
		// return $this->render('index',['model'=>$model]);
		
	}
	public function actionDo_add()
	{	
		$data=Yii::$app->request->post();
		// $article=new Article;
		// $article->views = 12;
		// $article->save();
		// $info=$artice->attributes[date]
		echo "<pre>";
		print_r($data);
	}
}
