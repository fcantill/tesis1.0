<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trabajo".
 *
 * @property integer $id_trabajo
 * @property integer $usuario_id_usuario
 * @property integer $campus_id_campus
 * @property string $horario_trabajo
 * @property string $created
 * @property string $deleted
 * @property string $updated
 *
 * @property Usuario $usuarioIdUsuario
 * @property Campus $campusIdCampus
 */
class Trabajo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trabajo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id_usuario', 'campus_id_campus'], 'required'],
            [['usuario_id_usuario', 'campus_id_campus'], 'integer'],
            [['created', 'deleted', 'updated'], 'safe'],
            [['horario_trabajo'], 'string', 'max' => 45],
            [['usuario_id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id_usuario' => 'id_usuario']],
            [['campus_id_campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['campus_id_campus' => 'id_campus']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_trabajo' => 'Id Trabajo',
            'usuario_id_usuario' => 'Usuario Id Usuario',
            'campus_id_campus' => 'Campus Id Campus',
            'horario_trabajo' => 'Horario Trabajo',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id_usuario' => 'usuario_id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampusIdCampus()
    {
        return $this->hasOne(Campus::className(), ['id_campus' => 'campus_id_campus']);
    }
}
