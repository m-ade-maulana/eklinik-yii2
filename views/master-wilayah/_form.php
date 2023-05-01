<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zhuravljov\yii\widgets\DateTimePicker;

/** @var yii\web\View $this */
/** @var app\models\MasterWilayah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-wilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_buka_klinik')->widget(DateTimePicker::class, [
        'clientOptions' => [
            'format' => 'hh:ii',
            'language' => 'en-us',
            'autoclose' => true
        ]
    ]) ?>

    <?= $form->field($model, 'jam_tutup_klinik')->widget(DateTimePicker::class, [
        'clientOptions' => [
            'format' => 'hh:ii',
            'language' => 'en-us',
            'autoclose' => true
        ]
    ]) ?>

    <?= $form->field($model, 'penanggung_jawab_klinik')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>