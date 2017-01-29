<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Alamat;

/**
 * AlamatSearch represents the model behind the search form about `backend\models\Alamat`.
 */
class AlamatSearch extends Alamat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['satker_id', 'kode_pos'], 'integer'],
            [['ibukota', 'alamat', 'telp', 'fax', 'website', 'email'], 'safe'],
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
        $query = Alamat::find();

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
            'kode_pos' => $this->kode_pos,
        ]);

        $query->andFilterWhere(['like', 'ibukota', $this->ibukota])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
