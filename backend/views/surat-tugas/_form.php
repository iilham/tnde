<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratTugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-tugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput() ?>

    <?= $form->field($model, 'satker_id')->textInput() ?>

    <?= $form->field($model, 'bulan')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'menimbang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dasar_id')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_akhir')->textInput() ?>

    <?= $form->field($model, 'pembenanan_id')->textInput() ?>

    <?= $form->field($model, 'tgl_surtug')->textInput() ?>

    <?= $form->field($model, 'ttd_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttd_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttd_nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
