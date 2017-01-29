<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pembebanan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembebanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembebanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'satker_id',
            'unit_org_kode',
            'program_kode',
            'program',
            'kegiatan_kode',
            'kegiatan',
            'output_kode',
            'output',
            'sub_output_kode',
            'komponen_kode',
            'komponen',
            'sub_komponen_kode',
            'sub_komponen',
            'akun',
            'detil',
        ],
    ]) ?>

</div>
