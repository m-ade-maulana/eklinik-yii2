<?php

use app\models\Pendaftaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\PendafataranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pendaftaran',
            'id_pasien',
            'tanggal_berobat',
            'rujukan_poli',
            'nomor_urut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pendaftaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tindakan' => $model->id_tindakan]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>