<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MasterWilayah $model */

$this->title = $model->kode_klinik;
$this->params['breadcrumbs'][] = ['label' => 'Master Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-wilayah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_klinik' => $model->kode_klinik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_klinik' => $model->kode_klinik], [
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
            'kode_klinik',
            'nama_klinik',
            'lokasi_klinik',
            'jam_buka_klinik',
            'jam_tutup_klinik',
            'penanggung_jawab_klinik',
        ],
    ]) ?>

</div>
