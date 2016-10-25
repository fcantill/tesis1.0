<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campus".
 *
 * @property integer $id_campus
 * @property string $nombre_campus
 * @property string $direccion_campus
 * @property string $created
 * @property string $deleted
 * @property string $updated
 *
 * @property Marcaje[] $marcajes
 * @property Puntogeografico[] $puntogeograficos
 * @property Trabajo[] $trabajos
 */
class Campus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created', 'deleted', 'updated'], 'safe'],
            [['nombre_campus', 'direccion_campus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_campus' => 'Id Campus',
            'nombre_campus' => 'Nombre Campus',
            'direccion_campus' => 'Direccion Campus',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcajes()
    {
        return $this->hasMany(Marcaje::className(), ['campus_id_campus' => 'id_campus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuntogeograficos()
    {
        return $this->hasMany(Puntogeografico::className(), ['campus_id_campus' => 'id_campus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrabajos()
    {
        return $this->hasMany(Trabajo::className(), ['campus_id_campus' => 'id_campus']);
    }
}
