<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporterdetail".
 *
 * @property int $id
 * @property string $rep_code
 * @property int|null $rep_co_quan
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
            [['rep_code', 'rep_name', 'rep_avt', 'rep_gender', 'rep_dob', 'rep_noi_o' , 'rep_dan_toc', 'rep_que_quan', 'rep_cmnd', 'rep_ngay_cap_cmnd', 'rep_cmnd_front', 'rep_cmnd_back', 'created_at', 'updated_at'], 'required'],
            [['rep_co_quan', 'rep_gender', 'rep_dob', 'rep_ngay_cap_cmnd', 'created_at', 'updated_at'], 'integer'],
            [['rep_code'], 'string', 'max' => 8],
            [['rep_name', 'rep_avt', 'rep_noi_o', 'rep_dan_toc', 'rep_que_quan', 'rep_chuc_vu', 'rep_but_danh', 'rep_giao_duc', 'rep_chuyen_mon', 'rep_truong_hoc', 'rep_chuyen_nganh', 'rep_hinh_thuc', 'rep_tot_nghiep', 'rep_chinh_tri', 'rep_ngoai_ngu', 'rep_chung_chi', 'rep_dang_vien', 'rep_chuc_dah', 'rep_so_the_cu', 'rep_cmnd', 'rep_cmnd_front', 'rep_cmnd_back', 'rep_hdld', 'rep_scan_bang', 'rep_scan_hdld', 'rep_scan_hs_khac'], 'string', 'max' => 255],
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
            'rep_code' => 'Mã phóng viên',
            'rep_co_quan' => 'Tên cơ quan',
            'rep_name' => 'Họv và tên',
            'rep_avt' => 'Ảnh phóng viên',
            'rep_gender' => 'Giới tính',
            'rep_dob' => 'Ngày sinh',
            'rep_dan_toc' => 'Dân tộc',
            'rep_que_quan' => 'Quê quán',
            'rep_noi_o' => 'Nơi ở',
            'rep_chuc_vu' => 'Chức vụ',
            'rep_but_danh' => 'Bút danh',
            'rep_giao_duc' => 'Giáo dục',
            'rep_chuyen_mon' => 'Chuyên môn',
            'rep_truong_hoc' => 'Trường học',
            'rep_chuyen_nganh' => 'Chuyên ngành',
            'rep_hinh_thuc' => 'Hình thức',
            'rep_tot_nghiep' => 'Năm tốt nghiệp',
            'rep_chinh_tri' => 'Chính trị',
            'rep_ngoai_ngu' => 'Ngoại ngữ',
            'rep_chung_chi' => 'Chứng chỉ',
            'rep_dang_vien' => 'Đảng viên',
            'rep_chuc_dah' => 'Chức danh',
            'rep_so_the_cu' => 'Số thẻ cũ',
            'rep_cmnd' => 'Số CMND',
            'rep_ngay_cap_cmnd' => 'Ngày cấp CMND',
            'rep_cmnd_front' => 'Mặt trước CMND',
            'rep_cmnd_back' => 'Mặt sau CMND',
            'rep_hdld' => 'Ngày ký HDLD',
            'rep_scan_bang' => 'Scan bằng',
            'rep_scan_hdld' => 'Scan HDLD',
            'rep_scan_hs_khac' => 'Scan hồ sơ khác',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
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
