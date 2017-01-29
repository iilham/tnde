<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alamat */

$this->title = $model->satker_id;
$this->params['breadcrumbs'][] = ['label' => 'Alamats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alamat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->satker_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->satker_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'satker_id',
            'ibukota',
            'alamat:ntext',
            'telp',
            'fax',
            'website',
            'email:email',
            'kode_pos',
        ],
    ]) ?>

</div>
