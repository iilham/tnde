<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pembebanan;

/**
 * PembebananSearch represents the model behind the search form about `backend\models\Pembebanan`.
 */
class PembebananSearch extends Pembebanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'satker_id'], 'integer'],
            [['unit_org_kode', 'program_kode', 'program', 'kegiatan_kode', 'kegiatan', 'output_kode', 'output', 'sub_output_kode', 'komponen_kode', 'komponen', 'sub_komponen_kode', 'sub_komponen', 'akun', 'detil'], 'safe'],
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
        $query = Pembebanan::find();

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
            'satker_id' => $this->satker_id,
        ]);

        $query->andFilterWhere(['like', 'unit_org_kode', $this->unit_org_kode])
            ->andFilterWhere(['like', 'program_kode', $this->program_kode])
            ->andFilterWhere(['like', 'program', $this->program])
            ->andFilterWhere(['like', 'kegiatan_kode', $this->kegiatan_kode])
            ->andFilterWhere(['like', 'kegiatan', $this->kegiatan])
            ->andFilterWhere(['like', 'output_kode', $this->output_kode])
            ->andFilterWhere(['like', 'output', $this->output])
            ->andFilterWhere(['like', 'sub_output_kode', $this->sub_output_kode])
            ->andFilterWhere(['like', 'komponen_kode', $this->komponen_kode])
            ->andFilterWhere(['like', 'komponen', $this->komponen])
            ->andFilterWhere(['like', 'sub_komponen_kode', $this->sub_komponen_kode])
            ->andFilterWhere(['like', 'sub_komponen', $this->sub_komponen])
            ->andFilterWhere(['like', 'akun', $this->akun])
            ->andFilterWhere(['like', 'detil', $this->detil]);

        return $dataProvider;
    }
}
