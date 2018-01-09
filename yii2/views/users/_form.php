<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dorm_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iclass')->textInput() ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'famname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hujiadress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stutel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weixin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'famtel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rili')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bed')->textInput() ?>

    <?= $form->field($model, 'openid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
