<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property integer $id_horario
 * @property string $hora_inicio
 * @property string $hora_termino
 * @property string $horario_nombre
 *
 * @property Usuario[] $usuarios
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hora_inicio', 'hora_termino', 'horario_nombre'], 'required'],
            [['hora_inicio', 'hora_termino'], 'safe'],
            [['horario_nombre'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_horario' => 'Id Horario',
            'hora_inicio' => 'Hora Inicio',
            'hora_termino' => 'Hora Termino',
            'horario_nombre' => 'Horario Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['horario_id_horario' => 'id_horario']);
    }
}
