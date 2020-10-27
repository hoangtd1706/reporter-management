<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reporterdetail;

/**
 * ReporterdetailSearch represents the model behind the search form of `backend\models\Reporterdetail`.
 */
class ReporterdetailSearch extends Reporterdetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rep_gender', 'rep_dob', 'rep_ngay_cap_cmnd', 'created_at', 'updated_at'], 'integer'],
            [['rep_code', 'rep_name', 'rep_avt', 'rep_noi_o', 'rep_chuc_vu', 'rep_but_danh', 'rep_giao_duc', 'rep_chuyen_mon', 'rep_truong_hoc', 'rep_chuyen_nganh', 'rep_hinh_thuc', 'rep_tot_nghiep', 'rep_chinh_tri', 'rep_ngoai_ngu', 'rep_chung_chi', 'rep_dang_vien', 'rep_chuc_dah', 'rep_so_the_cu', 'rep_cmnd', 'rep_cmnd_front', 'rep_cmnd_back', 'rep_hdld', 'rep_scan_bang', 'rep_scan_hdld', 'rep_scan_hs_khac'], 'safe'],
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
        $query = Reporterdetail::find();

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
            'rep_gender' => $this->rep_gender,
            'rep_dob' => $this->rep_dob,
            'rep_ngay_cap_cmnd' => $this->rep_ngay_cap_cmnd,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'rep_code', $this->rep_code])
            ->andFilterWhere(['like', 'rep_name', $this->rep_name])
            ->andFilterWhere(['like', 'rep_avt', $this->rep_avt])
            ->andFilterWhere(['like', 'rep_noi_o', $this->rep_noi_o])
            ->andFilterWhere(['like', 'rep_chuc_vu', $this->rep_chuc_vu])
            ->andFilterWhere(['like', 'rep_but_danh', $this->rep_but_danh])
            ->andFilterWhere(['like', 'rep_giao_duc', $this->rep_giao_duc])
            ->andFilterWhere(['like', 'rep_chuyen_mon', $this->rep_chuyen_mon])
            ->andFilterWhere(['like', 'rep_truong_hoc', $this->rep_truong_hoc])
            ->andFilterWhere(['like', 'rep_chuyen_nganh', $this->rep_chuyen_nganh])
            ->andFilterWhere(['like', 'rep_hinh_thuc', $this->rep_hinh_thuc])
            ->andFilterWhere(['like', 'rep_tot_nghiep', $this->rep_tot_nghiep])
            ->andFilterWhere(['like', 'rep_chinh_tri', $this->rep_chinh_tri])
            ->andFilterWhere(['like', 'rep_ngoai_ngu', $this->rep_ngoai_ngu])
            ->andFilterWhere(['like', 'rep_chung_chi', $this->rep_chung_chi])
            ->andFilterWhere(['like', 'rep_dang_vien', $this->rep_dang_vien])
            ->andFilterWhere(['like', 'rep_chuc_dah', $this->rep_chuc_dah])
            ->andFilterWhere(['like', 'rep_so_the_cu', $this->rep_so_the_cu])
            ->andFilterWhere(['like', 'rep_cmnd', $this->rep_cmnd])
            ->andFilterWhere(['like', 'rep_cmnd_front', $this->rep_cmnd_front])
            ->andFilterWhere(['like', 'rep_cmnd_back', $this->rep_cmnd_back])
            ->andFilterWhere(['like', 'rep_hdld', $this->rep_hdld])
            ->andFilterWhere(['like', 'rep_scan_bang', $this->rep_scan_bang])
            ->andFilterWhere(['like', 'rep_scan_hdld', $this->rep_scan_hdld])
            ->andFilterWhere(['like', 'rep_scan_hs_khac', $this->rep_scan_hs_khac]);

        return $dataProvider;
    }
}
