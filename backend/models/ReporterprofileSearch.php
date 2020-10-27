<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reporterprofile;

/**
 * ReporterprofileSearch represents the model behind the search form of `backend\models\Reporterprofile`.
 */
class ReporterprofileSearch extends Reporterprofile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cate_id', 'created_at', 'updated_at'], 'integer'],
            [['profile_code', 'rep_code', 'so_the_nha_bao', 'status'], 'safe'],
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
        $query = Reporterprofile::find();

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
            'cate_id' => $this->cate_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'profile_code', $this->profile_code])
            ->andFilterWhere(['like', 'rep_code', $this->rep_code])
            ->andFilterWhere(['like', 'so_the_nha_bao', $this->so_the_nha_bao])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
