<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterWilayah;

/**
 * MasterWilayahSearch represents the model behind the search form of `app\models\MasterWilayah`.
 */
class MasterWilayahSearch extends MasterWilayah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_klinik'], 'integer'],
            [['nama_klinik', 'lokasi_klinik', 'jam_buka_klinik', 'jam_tutup_klinik', 'penanggung_jawab_klinik'], 'safe'],
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
        $query = MasterWilayah::find();

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
            'kode_klinik' => $this->kode_klinik,
            'jam_buka_klinik' => $this->jam_buka_klinik,
            'jam_tutup_klinik' => $this->jam_tutup_klinik,
        ]);

        $query->andFilterWhere(['like', 'nama_klinik', $this->nama_klinik])
            ->andFilterWhere(['like', 'lokasi_klinik', $this->lokasi_klinik])
            ->andFilterWhere(['like', 'penanggung_jawab_klinik', $this->penanggung_jawab_klinik]);

        return $dataProvider;
    }
}
