<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratMasukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-masuk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'satker_id') ?>

    <?= $form->field($model, 'no_urut') ?>

    <?= $form->field($model, 'folder_id') ?>

    <?= $form->field($model, 'tgl_terima') ?>

    <?= $form->field($model, 'tgl_surat') ?>

    <?php // echo $form->field($model, 'perihal') ?>

    <?php // echo $form->field($model, 'tujuan') ?>

    <?php // echo $form->field($model, 'pengirim') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'tanggapan') ?>

    <?php // echo $form->field($model, 'sifat') ?>

    <?php // echo $form->field($model, 'ringkasan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
