<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $cate_name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Reporterprofile[] $reporterprofiles
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cate_name', 'created_at', 'updated_at'], 'required', 'message'=>'{attribute} không được để trống!'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['cate_name'], 'string', 'max' => 255],
            [['cate_name'], 'unique', 'message'=>'đã tồn tại!'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cate_name' => 'Tên loại hồ sơ',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }

    /**
     * Gets query for [[Reporterprofiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReporterprofiles()
    {
        return $this->hasMany(Reporterprofile::className(), ['cate_id' => 'id']);
    }
}
