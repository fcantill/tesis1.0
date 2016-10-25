<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property integer $id_estado
 * @property string $nombre_estado
 * @property string $created
 * @property string $deleted
 * @property string $updated
 *
 * @property Computador[] $computadors
 * @property Smartphone[] $smartphones
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created', 'deleted', 'updated'], 'safe'],
            [['nombre_estado'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado' => 'Id Estado',
            'nombre_estado' => 'Nombre Estado',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComputadors()
    {
        return $this->hasMany(Computador::className(), ['estado_id_estado' => 'id_estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmartphones()
    {
        return $this->hasMany(Smartphone::className(), ['estado_id_estado' => 'id_estado']);
    }
}
