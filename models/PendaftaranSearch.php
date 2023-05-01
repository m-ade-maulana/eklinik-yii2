<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form of `app\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pendaftaran', 'id_pasien'], 'integer'],
            [['tanggal_berobat', 'rujukan_poli', 'nomor_urut'], 'safe'],
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
        $query = Pendaftaran::find();

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
            'id_pendaftaran' => $this->id_pendaftaran,
            'id_pasien' => $this->id_pasien,
            'tanggal_berobat' => $this->tanggal_berobat,
        ]);

        $query->andFilterWhere(['like', 'rujukan_poli', $this->rujukan_poli])
            ->andFilterWhere(['like', 'nomor_urut', $this->nomor_urut]);

        return $dataProvider;
    }
}
