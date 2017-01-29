<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratTugas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Tugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-tugas-view">

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
            'nomor',
            'satker_id',
            'bulan',
            'tahun',
            'menimbang:ntext',
            'dasar_id',
            'tgl_mulai',
            'tgl_akhir',
            'pembenanan_id',
            'tgl_surtug',
            'ttd_jabatan',
            'ttd_nama',
            'ttd_nip',
            'status',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
