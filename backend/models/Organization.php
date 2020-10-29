<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property int $id
 * @property string $org_name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['org_name', 'created_at', 'updated_at'], 'required','message'=>'{attribute} không được để trống!'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['org_name'], 'string', 'max' => 255],
            [['org_name'], 'unique', 'message' => '{attribute} đã tồn tại'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'org_name' => 'Tên cơ quan',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
}
