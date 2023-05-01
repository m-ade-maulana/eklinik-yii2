<?php

use app\models\Obat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\ObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat', ['create'], ['class' => 'btn btn-success']) ?>
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
                'header' => 'ID Obat',
                'value' => function ($model) {
                    return $model->id_obat;
                }
            ],
            [
                'header' => 'Nama Obat',
                'value' => function ($model) {
                    return $model->nama_obat;
                }
            ],
            [
                'header' => 'Keterangan Obat',
                'value' => function ($model) {
                    return $model->keterangan;
                }
            ],
            [
                'header' => 'Aksi',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Obat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_obat' => $model->id_obat]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>