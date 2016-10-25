<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puntogeografico".
 *
 * @property integer $id_puntoGeografico
 * @property integer $radio_puntoGeografico
 * @property string $nombre_puntoGeografico
 * @property string $created
 * @property string $deleted
 * @property string $updated
 * @property integer $campus_id_campus
 *
 * @property Campus $campusIdCampus
 */
class Puntogeografico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puntogeografico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['radio_puntoGeografico', 'campus_id_campus'], 'integer'],
            [['created', 'deleted', 'updated'], 'safe'],
            [['campus_id_campus'], 'required'],
            [['nombre_puntoGeografico'], 'string', 'max' => 45],
            [['campus_id_campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['campus_id_campus' => 'id_campus']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_puntoGeografico' => 'Id Punto Geografico',
            'radio_puntoGeografico' => 'Radio Punto Geografico',
            'nombre_puntoGeografico' => 'Nombre Punto Geografico',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
            'campus_id_campus' => 'Campus Id Campus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampusIdCampus()
    {
        return $this->hasOne(Campus::className(), ['id_campus' => 'campus_id_campus']);
    }
}
