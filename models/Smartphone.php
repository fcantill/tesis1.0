<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "smartphone".
 *
 * @property integer $id_smartphone
 * @property string $imei_smartphone
 * @property string $created
 * @property string $deleted
 * @property string $updated
 * @property integer $usuario_id_usuario
 * @property integer $estado_id_estado
 *
 * @property Usuario $usuarioIdUsuario
 * @property Estado $estadoIdEstado
 */
class Smartphone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'smartphone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imei_smartphone', 'usuario_id_usuario', 'estado_id_estado'], 'required'],
            [['created', 'deleted', 'updated'], 'safe'],
            [['usuario_id_usuario', 'estado_id_estado'], 'integer'],
            [['imei_smartphone'], 'string', 'max' => 45],
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
            'id_smartphone' => 'Id Smartphone',
            'imei_smartphone' => 'Imei Smartphone',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
            'usuario_id_usuario' => 'Usuario Id Usuario',
            'estado_id_estado' => 'Estado Id Estado',
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
