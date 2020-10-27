<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporterdetail".
 *
 * @property int $id
 * @property string $rep_code
 * @property string $rep_name
 * @property string $rep_avt
 * @property int $rep_gender
 * @property int $rep_dob
 * @property string $rep_noi_o
 * @property string|null $rep_chuc_vu
 * @property string|null $rep_but_danh
 * @property string|null $rep_giao_duc
 * @property string|null $rep_chuyen_mon
 * @property string|null $rep_truong_hoc
 * @property string|null $rep_chuyen_nganh
 * @property string|null $rep_hinh_thuc
 * @property string|null $rep_tot_nghiep
 * @property string|null $rep_chinh_tri
 * @property string|null $rep_ngoai_ngu
 * @property string|null $rep_chung_chi
 * @property string|null $rep_dang_vien
 * @property string|null $rep_chuc_dah
 * @property string|null $rep_so_the_cu
 * @property string $rep_cmnd
 * @property int $rep_ngay_cap_cmnd
 * @property string $rep_cmnd_front
 * @property string $rep_cmnd_back
 * @property string|null $rep_hdld
 * @property string|null $rep_scan_bang
 * @property string|null $rep_scan_hdld
 * @property string|null $rep_scan_hs_khac
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Reporter $repCode
 */
class Reporterdetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reporterdetail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rep_code', 'rep_name', 'rep_avt', 'rep_gender', 'rep_dob', 'rep_noi_o', 'rep_cmnd', 'rep_ngay_cap_cmnd', 'rep_cmnd_front', 'rep_cmnd_back', 'created_at', 'updated_at'], 'required'],
            [['rep_gender', 'rep_dob', 'rep_ngay_cap_cmnd', 'created_at', 'updated_at'], 'integer'],
            [['rep_code'], 'string', 'max' => 8],
            [['rep_name', 'rep_avt', 'rep_noi_o', 'rep_chuc_vu', 'rep_but_danh', 'rep_giao_duc', 'rep_chuyen_mon', 'rep_truong_hoc', 'rep_chuyen_nganh', 'rep_hinh_thuc', 'rep_tot_nghiep', 'rep_chinh_tri', 'rep_ngoai_ngu', 'rep_chung_chi', 'rep_dang_vien', 'rep_chuc_dah', 'rep_so_the_cu', 'rep_cmnd', 'rep_cmnd_front', 'rep_cmnd_back', 'rep_hdld', 'rep_scan_bang', 'rep_scan_hdld', 'rep_scan_hs_khac'], 'string', 'max' => 255],
            [['rep_code'], 'exist', 'skipOnError' => true, 'targetClass' => Reporter::className(), 'targetAttribute' => ['rep_code' => 'rep_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rep_code' => 'Rep Code',
            'rep_name' => 'Rep Name',
            'rep_avt' => 'Rep Avt',
            'rep_gender' => 'Rep Gender',
            'rep_dob' => 'Rep Dob',
            'rep_noi_o' => 'Rep Noi O',
            'rep_chuc_vu' => 'Rep Chuc Vu',
            'rep_but_danh' => 'Rep But Danh',
            'rep_giao_duc' => 'Rep Giao Duc',
            'rep_chuyen_mon' => 'Rep Chuyen Mon',
            'rep_truong_hoc' => 'Rep Truong Hoc',
            'rep_chuyen_nganh' => 'Rep Chuyen Nganh',
            'rep_hinh_thuc' => 'Rep Hinh Thuc',
            'rep_tot_nghiep' => 'Rep Tot Nghiep',
            'rep_chinh_tri' => 'Rep Chinh Tri',
            'rep_ngoai_ngu' => 'Rep Ngoai Ngu',
            'rep_chung_chi' => 'Rep Chung Chi',
            'rep_dang_vien' => 'Rep Dang Vien',
            'rep_chuc_dah' => 'Rep Chuc Dah',
            'rep_so_the_cu' => 'Rep So The Cu',
            'rep_cmnd' => 'Rep Cmnd',
            'rep_ngay_cap_cmnd' => 'Rep Ngay Cap Cmnd',
            'rep_cmnd_front' => 'Rep Cmnd Front',
            'rep_cmnd_back' => 'Rep Cmnd Back',
            'rep_hdld' => 'Rep Hdld',
            'rep_scan_bang' => 'Rep Scan Bang',
            'rep_scan_hdld' => 'Rep Scan Hdld',
            'rep_scan_hs_khac' => 'Rep Scan Hs Khac',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[RepCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepCode()
    {
        return $this->hasOne(Reporter::className(), ['rep_code' => 'rep_code']);
    }
}
