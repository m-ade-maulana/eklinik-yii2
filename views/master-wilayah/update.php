<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterWilayah $model */

$this->title = 'Update Master Wilayah: ' . $model->kode_klinik;
$this->params['breadcrumbs'][] = ['label' => 'Master Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_klinik, 'url' => ['view', 'kode_klinik' => $model->kode_klinik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-wilayah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
