<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medicohospital".
 *
 * @property int $id
 * @property int|null $id_medico
 * @property int|null $id_hospital
 *
 * @property Hospital $hospital
 * @property Medico $medico
 */
class Medicohospital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medicohospital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_medico', 'id_hospital'], 'integer'],
            [['id_medico'], 'exist', 'skipOnError' => true, 'targetClass' => Medico::class, 'targetAttribute' => ['id_medico' => 'id']],
            [['id_hospital'], 'exist', 'skipOnError' => true, 'targetClass' => Hospital::class, 'targetAttribute' => ['id_hospital' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_medico' => 'Id Medico',
            'id_hospital' => 'Id Hospital',
        ];
    }

    /**
     * Gets query for [[Hospital]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHospital()
    {
        return $this->hasOne(Hospital::class, ['id' => 'id_hospital']);
    }

    /**
     * Gets query for [[Medico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedico()
    {
        return $this->hasOne(Medico::class, ['id' => 'id_medico']);
    }
}
