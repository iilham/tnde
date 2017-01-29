<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PembebananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembebanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembebanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembebanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'satker_id',
            'unit_org_kode',
            'program_kode',
            'program',
            // 'kegiatan_kode',
            // 'kegiatan',
            // 'output_kode',
            // 'output',
            // 'sub_output_kode',
            // 'komponen_kode',
            // 'komponen',
            // 'sub_komponen_kode',
            // 'sub_komponen',
            // 'akun',
            // 'detil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
