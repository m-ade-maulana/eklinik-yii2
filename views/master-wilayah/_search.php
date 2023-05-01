<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterWilayahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-wilayah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'kode_klinik') ?>

    <?= $form->field($model, 'nama_klinik') ?>

    <?= $form->field($model, 'lokasi_klinik') ?>

    <?= $form->field($model, 'jam_buka_klinik') ?>

    <?= $form->field($model, 'jam_tutup_klinik') ?>

    <?php // echo $form->field($model, 'penanggung_jawab_klinik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
