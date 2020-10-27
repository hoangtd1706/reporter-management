<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reporterprocess;

/**
 * ReporterprocessSearch represents the model behind the search form of `backend\models\Reporterprocess`.
 */
class ReporterprocessSearch extends Reporterprocess
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['rep_code', 'start_date', 'end_date', 'chuc_vu', 'co_quan', 'ngach_luong', 'bac_luong', 'note'], 'safe'],
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
        $query = Reporterprocess::find();

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
        ]);

        $query->andFilterWhere(['like', 'rep_code', $this->rep_code])
            ->andFilterWhere(['like', 'start_date', $this->start_date])
            ->andFilterWhere(['like', 'end_date', $this->end_date])
            ->andFilterWhere(['like', 'chuc_vu', $this->chuc_vu])
            ->andFilterWhere(['like', 'co_quan', $this->co_quan])
            ->andFilterWhere(['like', 'ngach_luong', $this->ngach_luong])
            ->andFilterWhere(['like', 'bac_luong', $this->bac_luong])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
