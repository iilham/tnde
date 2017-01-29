<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Disposisi */

$this->title = 'Update Disposisi: ' . $model->satker_id;
$this->params['breadcrumbs'][] = ['label' => 'Disposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->satker_id, 'url' => ['view', 'satker_id' => $model->satker_id, 'no_urut' => $model->no_urut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disposisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
