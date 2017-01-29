<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pembebanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembebanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'satker_id')->textInput() ?>

    <?= $form->field($model, 'unit_org_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'program_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kegiatan_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'output_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'output')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_output_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komponen_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komponen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_komponen_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_komponen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detil')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
