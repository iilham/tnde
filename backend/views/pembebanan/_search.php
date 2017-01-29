<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PembebananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembebanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'satker_id') ?>

    <?= $form->field($model, 'unit_org_kode') ?>

    <?= $form->field($model, 'program_kode') ?>

    <?= $form->field($model, 'program') ?>

    <?php // echo $form->field($model, 'kegiatan_kode') ?>

    <?php // echo $form->field($model, 'kegiatan') ?>

    <?php // echo $form->field($model, 'output_kode') ?>

    <?php // echo $form->field($model, 'output') ?>

    <?php // echo $form->field($model, 'sub_output_kode') ?>

    <?php // echo $form->field($model, 'komponen_kode') ?>

    <?php // echo $form->field($model, 'komponen') ?>

    <?php // echo $form->field($model, 'sub_komponen_kode') ?>

    <?php // echo $form->field($model, 'sub_komponen') ?>

    <?php // echo $form->field($model, 'akun') ?>

    <?php // echo $form->field($model, 'detil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
