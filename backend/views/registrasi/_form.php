<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Registrasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
