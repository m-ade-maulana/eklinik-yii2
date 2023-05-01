<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property int $nomor_pegawai
 * @property int $nomor_induk_kependudukan
 * @property string $nama_pegawai
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $tempat_lahir
 * @property string $alamat
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_pegawai', 'nomor_induk_kependudukan', 'nama_pegawai', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'alamat'], 'required'],
            [['nomor_pegawai', 'nomor_induk_kependudukan'], 'integer'],
            [['alamat'], 'string'],
            [['nama_pegawai'], 'string', 'max' => 150],
            [['jenis_kelamin'], 'string', 'max' => 12],
            [['tanggal_lahir'], 'string', 'max' => 50],
            [['tempat_lahir'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nomor_pegawai' => 'Nomor Pegawai',
            'nomor_induk_kependudukan' => 'Nomor Induk Kependudukan',
            'nama_pegawai' => 'Nama Pegawai',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'alamat' => 'Alamat',
        ];
    }
}
