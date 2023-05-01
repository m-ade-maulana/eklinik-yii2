<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_wilayah".
 *
 * @property int $kode_klinik
 * @property string $nama_klinik
 * @property string $lokasi_klinik
 * @property string $jam_buka_klinik
 * @property string $jam_tutup_klinik
 * @property string $penanggung_jawab_klinik
 */
class MasterWilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_klinik', 'lokasi_klinik', 'jam_buka_klinik', 'jam_tutup_klinik', 'penanggung_jawab_klinik'], 'required'],
            [['jam_buka_klinik', 'jam_tutup_klinik'], 'safe'],
            [['nama_klinik', 'lokasi_klinik', 'penanggung_jawab_klinik'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_klinik' => 'Kode Klinik',
            'nama_klinik' => 'Nama Klinik',
            'lokasi_klinik' => 'Lokasi Klinik',
            'jam_buka_klinik' => 'Jam Buka Klinik',
            'jam_tutup_klinik' => 'Jam Tutup Klinik',
            'penanggung_jawab_klinik' => 'Penanggung Jawab Klinik',
        ];
    }
}
