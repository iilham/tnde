<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Alamat */

$this->title = 'Update Alamat: ' . $model->satker_id;
$this->params['breadcrumbs'][] = ['label' => 'Alamats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->satker_id, 'url' => ['view', 'id' => $model->satker_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alamat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
