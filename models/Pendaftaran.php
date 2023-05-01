<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property int $id_pendaftaran
 * @property int $id_pasien
 * @property string $tanggal_berobat
 * @property string $rujukan_poli
 * @property string $nomor_urut
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tanggal_berobat', 'rujukan_poli', 'nomor_urut'], 'required'],
            [['id_pasien'], 'integer'],
            [['tanggal_berobat'], 'safe'],
            [['rujukan_poli'], 'string', 'max' => 100],
            [['nomor_urut'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pendaftaran' => 'Id Pendaftaran',
            'id_pasien' => 'Id Pasien',
            'tanggal_berobat' => 'Tanggal Berobat',
            'rujukan_poli' => 'Rujukan Poli',
            'nomor_urut' => 'Nomor Urut',
        ];
    }
}
