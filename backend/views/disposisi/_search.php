<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DisposisiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disposisi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'satker_id') ?>

    <?= $form->field($model, 'no_urut') ?>

    <?= $form->field($model, 'tgl_terima') ?>

    <?= $form->field($model, 'keamanan') ?>

    <?= $form->field($model, 'tgl_penyeesaian') ?>

    <?php // echo $form->field($model, 'disposisi') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
