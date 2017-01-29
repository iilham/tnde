<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SuratTugas;

/**
 * SuratTugasSearch represents the model behind the search form about `backend\models\SuratTugas`.
 */
class SuratTugasSearch extends SuratTugas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nomor', 'satker_id', 'bulan', 'tahun', 'dasar_id', 'pembenanan_id', 'status', 'create_at', 'update_at'], 'integer'],
            [['menimbang', 'tgl_mulai', 'tgl_akhir', 'tgl_surtug', 'ttd_jabatan', 'ttd_nama', 'ttd_nip'], 'safe'],
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
        $query = SuratTugas::find();

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
            'id' => $this->id,
            'nomor' => $this->nomor,
            'satker_id' => $this->satker_id,
            'bulan' => $this->bulan,
            'tahun' => $this->tahun,
            'dasar_id' => $this->dasar_id,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_akhir' => $this->tgl_akhir,
            'pembenanan_id' => $this->pembenanan_id,
            'tgl_surtug' => $this->tgl_surtug,
            'status' => $this->status,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'menimbang', $this->menimbang])
            ->andFilterWhere(['like', 'ttd_jabatan', $this->ttd_jabatan])
            ->andFilterWhere(['like', 'ttd_nama', $this->ttd_nama])
            ->andFilterWhere(['like', 'ttd_nip', $this->ttd_nip]);

        return $dataProvider;
    }
}
