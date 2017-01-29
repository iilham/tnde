<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SuratMasuk;

/**
 * SuratMasukSearch represents the model behind the search form about `backend\models\SuratMasuk`.
 */
class SuratMasukSearch extends SuratMasuk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['satker_id', 'no_urut', 'folder_id', 'status'], 'integer'],
            [['tgl_terima', 'tgl_surat', 'perihal', 'tujuan', 'pengirim', 'alamat', 'tanggapan', 'sifat', 'ringkasan', 'keterangan', 'file'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = SuratMasuk::find();

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
            'satker_id' => $this->satker_id,
            'no_urut' => $this->no_urut,
            'folder_id' => $this->folder_id,
            'tgl_terima' => $this->tgl_terima,
            'tgl_surat' => $this->tgl_surat,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'perihal', $this->perihal])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan])
            ->andFilterWhere(['like', 'pengirim', $this->pengirim])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tanggapan', $this->tanggapan])
            ->andFilterWhere(['like', 'sifat', $this->sifat])
            ->andFilterWhere(['like', 'ringkasan', $this->ringkasan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
