<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'user_id')->textInput() ?> -->

    <?= $form->field($model, 'first_name')->textInput(['maxLength' => 45]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxLength' => 45]) ?>
    
    <br/>
    <?= $form->field($model, 'birthdate')->textInput() ?>
    * please use YYYY-mm-dd format
    <br/>

    <?= $form->field($model, 'gender_id')->dropDownList($model->genderList, ['prompt' => 'Please Chose One']) ?>

    <!--<?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
