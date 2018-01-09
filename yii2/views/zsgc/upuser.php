
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form= new ActiveForm
?>

<?php $form=ActiveForm::begin(['action'=>['zsgc/doupuser'],'method'=>'post']);?> 
     
    <?php echo $form->field($model,'id',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[id]"]);?>
    <?php echo $form->field($model,'username',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[username]"]);?>
    <?php echo $form->field($model,'sex',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[sex]"]);?>
    <?php echo $form->field($model,'dorm_id',['labelOptions'  =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[dorm_id]"]);?>
    <?php echo $form->field($model,'iclass',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[iclass]"]);?>
      <?php echo $form->field($model,'adress',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[adress]"]);?>
        <?php echo $form->field($model,'major',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[major]"]);?>
           <?php echo $form->field($model,'famname',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[famname]"]);?>
            <?php echo $form->field($model,'stutel',['labelOptions' =>  ['class' => 'name']])->textInput(['class'=>'input','value'=> "$list[stutel]"]);?>
    

 <?php echo Html::submitButton('修改', ['class'=>'xiugai','name' =>'submit-button']);?>

 <?php ActiveForm::end(); ?>
