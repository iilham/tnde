<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratTugasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-tugas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'satker_id') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'menimbang') ?>

    <?php // echo $form->field($model, 'dasar_id') ?>

    <?php // echo $form->field($model, 'tgl_mulai') ?>

    <?php // echo $form->field($model, 'tgl_akhir') ?>

    <?php // echo $form->field($model, 'pembenanan_id') ?>

    <?php // echo $form->field($model, 'tgl_surtug') ?>

    <?php // echo $form->field($model, 'ttd_jabatan') ?>

    <?php // echo $form->field($model, 'ttd_nama') ?>

    <?php // echo $form->field($model, 'ttd_nip') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
