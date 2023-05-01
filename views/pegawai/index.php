<?php

use app\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\PegawaiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'header' => 'Nomor Pegawai',
                'value' => function ($model) {
                    return $model->nomor_pegawai;
                }
            ],
            [
                'header' => 'Nomor Induk Kependudukan',
                'value' => function ($model) {
                    return $model->nomor_induk_kependudukan;
                }
            ],
            [
                'header' => 'Nama Pegawai',
                'value' => function ($model) {
                    return $model->nama_pegawai;
                }
            ],
            [
                'header' => 'Jenis Kelamin',
                'value' => function ($model) {
                    return $model->jenis_kelamin;
                }
            ],
            [
                'header' => 'Aksi',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>