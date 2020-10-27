<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporterprofile".
 *
 * @property int $id
 * @property string|null $profile_code
 * @property string $rep_code
 * @property string|null $so_the_nha_bao
 * @property int|null $cate_id
 * @property string|null $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Category $cate
 * @property Reporter $repCode
 */
class Reporterprofile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reporterprofile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rep_code', 'created_at', 'updated_at'], 'required'],
            [['cate_id', 'created_at', 'updated_at'], 'integer'],
            [['profile_code', 'so_the_nha_bao', 'status'], 'string', 'max' => 255],
            [['rep_code'], 'string', 'max' => 8],
            [['profile_code'], 'unique'],
            [['cate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cate_id' => 'id']],
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
            'profile_code' => 'Profile Code',
            'rep_code' => 'Rep Code',
            'so_the_nha_bao' => 'So The Nha Bao',
            'cate_id' => 'Cate ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Cate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCate()
    {
        return $this->hasOne(Category::className(), ['id' => 'cate_id']);
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
