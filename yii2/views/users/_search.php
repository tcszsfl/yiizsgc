<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'idcate') ?>

    <?= $form->field($model, 'dorm_id') ?>

    <?php // echo $form->field($model, 'iclass') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'major') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'famname') ?>

    <?php // echo $form->field($model, 'hujiadress') ?>

    <?php // echo $form->field($model, 'stutel') ?>

    <?php // echo $form->field($model, 'weixin') ?>

    <?php // echo $form->field($model, 'qq') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'famtel') ?>

    <?php // echo $form->field($model, 'pro') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'rili') ?>

    <?php // echo $form->field($model, 'bed') ?>

    <?php // echo $form->field($model, 'openid') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
