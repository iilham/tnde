<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pembebanan */

$this->title = 'Create Pembebanan';
$this->params['breadcrumbs'][] = ['label' => 'Pembebanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembebanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
