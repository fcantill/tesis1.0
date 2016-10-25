<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "computador".
 *
 * @property integer $id_computador
 * @property string $mac_computador
 * @property string $created
 * @property string $deleted
 * @property string $updated
 * @property integer $estado_id_estado
 * @property integer $usuario_id_usuario
 *
 * @property Usuario $usuarioIdUsuario
 * @property Estado $estadoIdEstado
 */
class Computador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'computador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mac_computador', 'estado_id_estado', 'usuario_id_usuario'], 'required'],
            [['created', 'deleted', 'updated'], 'safe'],
            [['estado_id_estado', 'usuario_id_usuario'], 'integer'],
            [['mac_computador'], 'string', 'max' => 45],
            [['usuario_id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id_usuario' => 'id_usuario']],
            [['estado_id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id_estado' => 'id_estado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_computador' => 'Id Computador',
            'mac_computador' => 'Mac Computador',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
            'estado_id_estado' => 'Estado Id Estado',
            'usuario_id_usuario' => 'Usuario Id Usuario',
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
    public function getEstadoIdEstado()
    {
        return $this->hasOne(Estado::className(), ['id_estado' => 'estado_id_estado']);
    }
}
