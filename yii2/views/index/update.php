
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form= new ActiveForm
?>

<?php $form=ActiveForm::begin(['action'=>['index/data'],'method'=>'post']);?> 
     
 

    <?php echo $form->field($model,'id',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[1]"]);?>
    <?php echo $form->field($model,'username',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[3]"]);?>
    <?php echo $form->field($model,'sex',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[5]"]);?>
    <?php echo $form->field($model,'idcate',['labelOptions'  =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[7]"]);?>
    <?php echo $form->field($model,'dorm_id',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[9]"]);?>
      <?php echo $form->field($model,'adress',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[11]"]);?>
        <?php echo $form->field($model,'nation',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[13]"]);?>
           <?php echo $form->field($model,'stutel',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[15]"]);?>
    

 <?php echo Html::submitButton('修改', ['class'=>'xiugai','name' =>'submit-button']);?>

 <?php ActiveForm::end(); ?>
