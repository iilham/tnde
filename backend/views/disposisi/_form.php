<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Disposisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'satker_id')->textInput() ?>

    <?= $form->field($model, 'no_urut')->textInput() ?>

    <?= $form->field($model, 'tgl_terima')->textInput() ?>

    <?= $form->field($model, 'keamanan')->dropDownList([ 'Sangat Rahasia' => 'Sangat Rahasia', 'Rahasia' => 'Rahasia', 'Biasa' => 'Biasa', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_penyeesaian')->textInput() ?>

    <?= $form->field($model, 'disposisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
