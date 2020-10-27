<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporter".
 *
 * @property int $id
 * @property string|null $rep_code
 * @property int|null $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Reporterdetail[] $reporterdetails
 * @property Reporterprocess[] $reporterprocesses
 * @property Reporterprofile[] $reporterprofiles
 */
class Reporter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reporter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['rep_code'], 'string', 'max' => 8],
            [['rep_code'], 'unique'],
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
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Reporterdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReporterdetails()
    {
        return $this->hasMany(Reporterdetail::className(), ['rep_code' => 'rep_code']);
    }

    /**
     * Gets query for [[Reporterprocesses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReporterprocesses()
    {
        return $this->hasMany(Reporterprocess::className(), ['rep_code' => 'rep_code']);
    }

    /**
     * Gets query for [[Reporterprofiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReporterprofiles()
    {
        return $this->hasMany(Reporterprofile::className(), ['rep_code' => 'rep_code']);
    }
}
