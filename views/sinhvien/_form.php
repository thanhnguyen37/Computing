<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sinhvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinhvien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lop')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
