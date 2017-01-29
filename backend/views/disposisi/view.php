<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Disposisi */

$this->title = $model->satker_id;
$this->params['breadcrumbs'][] = ['label' => 'Disposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'satker_id' => $model->satker_id, 'no_urut' => $model->no_urut], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'satker_id' => $model->satker_id, 'no_urut' => $model->no_urut], [
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
            'no_urut',
            'tgl_terima',
            'keamanan',
            'tgl_penyeesaian',
            'disposisi:ntext',
            'nama',
            'status',
        ],
    ]) ?>

</div>
