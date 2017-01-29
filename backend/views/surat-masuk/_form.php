<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratMasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'satker_id')->textInput() ?>

    <?= $form->field($model, 'no_urut')->textInput() ?>

    <?= $form->field($model, 'folder_id')->textInput() ?>

    <?= $form->field($model, 'tgl_terima')->textInput() ?>

    <?= $form->field($model, 'tgl_surat')->textInput() ?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggapan')->dropDownList([ 'Sangat Segera' => 'Sangat Segera', 'Segera' => 'Segera', 'Biasa' => 'Biasa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sifat')->dropDownList([ 'Sangat Rahasia' => 'Sangat Rahasia', 'Rahasia' => 'Rahasia', 'Biasa' => 'Biasa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ringkasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
