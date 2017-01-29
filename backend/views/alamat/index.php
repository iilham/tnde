<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlamatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alamats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alamat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alamat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'satker_id',
            'ibukota',
            'alamat:ntext',
            'telp',
            'fax',
            // 'website',
            // 'email:email',
            // 'kode_pos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
