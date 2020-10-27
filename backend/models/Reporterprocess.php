<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporterprocess".
 *
 * @property int $id
 * @property string $rep_code
 * @property string $start_date
 * @property string|null $end_date
 * @property string|null $chuc_vu
 * @property string|null $co_quan
 * @property string|null $ngach_luong
 * @property string|null $bac_luong
 * @property string|null $note
 *
 * @property Reporter $repCode
 */
class Reporterprocess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reporterprocess';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rep_code', 'start_date'], 'required'],
            [['rep_code'], 'string', 'max' => 8],
            [['start_date', 'end_date'], 'string', 'max' => 10],
            [['chuc_vu'], 'string', 'max' => 50],
            [['co_quan'], 'string', 'max' => 100],
            [['ngach_luong', 'bac_luong'], 'string', 'max' => 20],
            [['note'], 'string', 'max' => 255],
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
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'chuc_vu' => 'Chuc Vu',
            'co_quan' => 'Co Quan',
            'ngach_luong' => 'Ngach Luong',
            'bac_luong' => 'Bac Luong',
            'note' => 'Note',
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
