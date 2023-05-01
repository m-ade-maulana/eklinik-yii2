<?php

use app\models\MasterWilayah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\MasterWilayahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Wilayahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-wilayah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Wilayah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            [
                'header' => 'Kode Klinik',
                'value' => function ($model) {
                    return $model->kode_klinik;
                }
            ],
            [
                'header' => 'Nama Klinik',
                'value' => function ($model) {
                    return $model->nama_klinik;
                }
            ],
            [
                'header' => 'Lokasi Klinik',
                'value' => function ($model) {
                    return $model->lokasi_klinik;
                }
            ],
            [
                'header' => 'Jam Buka Klinik',
                'value' => function ($model) {
                    return $model->jam_buka_klinik;
                }
            ],
            [
                'header' => 'Jam Tutup Klinik',
                'value' => function ($model) {
                    return $model->jam_tutup_klinik;
                }
            ],
            [
                'header' => 'Penanggung Jawab Klinik',
                'value' => function ($model) {
                    return $model->penanggung_jawab_klinik;
                }
            ],
            [
                'header' => 'Aksi',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterWilayah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_klinik' => $model->kode_klinik]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>