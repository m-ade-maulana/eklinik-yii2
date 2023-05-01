<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `app\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'nomor_pegawai', 'nomor_induk_kependudukan'], 'integer'],
            [['nama_pegawai', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'alamat'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pegawai::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pegawai' => $this->id_pegawai,
            'nomor_pegawai' => $this->nomor_pegawai,
            'nomor_induk_kependudukan' => $this->nomor_induk_kependudukan,
        ]);

        $query->andFilterWhere(['like', 'nama_pegawai', $this->nama_pegawai])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'tanggal_lahir', $this->tanggal_lahir])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
