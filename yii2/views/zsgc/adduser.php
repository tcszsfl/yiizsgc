
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form= new ActiveForm;
?>

<?php $form=ActiveForm::begin(['action'=>['zsgc/doadd'],'method'=>'post']);?> 
     
 
	<?php echo $form->field($model, 'username')->textInput(['maxlength' => 20]); ?>
	<?php echo $form->field($model, 'sex')->textInput(['maxlength' => 20]) ?>
	<?php echo $form->field($model, 'dorm_id')->textInput(['maxlength' => 20]) ?>
	<?php echo $form->field($model, 'iclass')->textInput(['maxlength' => 20]) ?>
	<?php echo $form->field($model, 'adress')->textInput(['maxlength' => 20]) ?>
	<?php echo $form->field($model, 'major')->textInput(['maxlength' => 20]) ?>
	<?php echo $form->field($model, 'famname')->textInput(['maxlength' => 20]) ?>
	<?php echo $form->field($model, 'stutel')->textInput(['maxlength' => 20]) ?>
    
 <?php echo Html::submitButton('添加', ['class'=>'tianjia','name' =>'submit-button']);?>

 <?php ActiveForm::end(); ?>

