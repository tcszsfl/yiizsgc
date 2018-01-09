
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form= new ActiveForm
?>

<?php $form=ActiveForm::begin(['action'=>['index/adduser'],'method'=>'post']);?> 
	 
 

     <?php echo $form->field($model,'username',['labelOptions' =>  ['label' => '姓名；']])->textInput(['class'=>'input']);?>


      <?php echo $form->field($model,'sex',['labelOptions' => ['label'=>'性别']])->textInput(['class'=>'input']);?>


      <?php echo $form->field($model,'idcate',['labelOptions' =>   ['label'=>'身份证']])->textInput(['class'=>'input']);?>


       <?php echo $form->field($model,'dorm_id',['labelOptions' => ['label'=>'宿舍号']])->textInput(['class'=>'input']);?>


       <?php echo $form->field($model,'adress',['labelOptions' => ['label'=>'家庭住址']])->textInput(['class'=>'input']);?>


        <?php echo $form->field($model,'nation',['labelOptions' => ['label'=>'民族']])->textInput(['class'=>'input']);?>


        <?php echo $form->field($model,'stutel',['labelOptions' => ['label'=>'手机号']])->textInput(['class'=>'input']);?>


 <?php echo Html::submitButton('提交', ['class'=>'tijiao','name' =>'submit-button']);?>

 <?php ActiveForm::end(); ?>
