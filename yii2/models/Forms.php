<?php
namespace app\models;

use Yii;
use yii\base\Model;


class Forms extends Model
{
	public $username;
	// public $password;
	public $sex;
	public $edu;
	public $file;
	public $info;
	public $userid;
	public $date;
	public $work;
	public $pay;
	public $telephone;
	public $registered;
	public $JobIntension;
	public $skill;
	public function rules()
	{
		return [
			[['username','password','sex','edu','file','info','userid','date','work','pay','telephone','registered','JobIntension','skill'],'required']
		];

	}
}
?>