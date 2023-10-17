<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospital".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Medicohospital[] $medicohospitals
 */
class Hospital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hospital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Medicohospitals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicohospitals()
    {
        return $this->hasMany(Medicohospital::class, ['id_hospital' => 'id']);
    }
}
