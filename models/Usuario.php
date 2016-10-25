<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id_usuario
 * @property string $nombre_usuario
 * @property string $contrasena_usuario
 * @property string $correo_usuario
 * @property string $direccion_usuario
 * @property string $rut_usuario
 * @property string $apellidoPaterno_usuario
 * @property string $apellidoMaterno_usuario
 * @property string $created
 * @property string $deleted
 * @property string $updated
 * @property integer $perfil_id_perfil
 * @property integer $horario_id_horario
 *
 * @property Computador[] $computadors
 * @property Marcaje[] $marcajes
 * @property Smartphone[] $smartphones
 * @property Trabajo[] $trabajos
 * @property Perfil $perfilIdPerfil
 * @property Horario $horarioIdHorario
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created', 'deleted', 'updated'], 'safe'],
            [['perfil_id_perfil', 'horario_id_horario'], 'required'],
            [['perfil_id_perfil', 'horario_id_horario'], 'integer'],
            [['nombre_usuario', 'contrasena_usuario', 'correo_usuario', 'direccion_usuario', 'apellidoPaterno_usuario', 'apellidoMaterno_usuario'], 'string', 'max' => 45],
            [['rut_usuario'], 'string', 'max' => 10],
            [['perfil_id_perfil'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['perfil_id_perfil' => 'id_perfil']],
            [['horario_id_horario'], 'exist', 'skipOnError' => true, 'targetClass' => Horario::className(), 'targetAttribute' => ['horario_id_horario' => 'id_horario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'nombre_usuario' => 'Nombre Usuario',
            'contrasena_usuario' => 'Contrasena Usuario',
            'correo_usuario' => 'Correo Usuario',
            'direccion_usuario' => 'Direccion Usuario',
            'rut_usuario' => 'Rut Usuario',
            'apellidoPaterno_usuario' => 'Apellido Paterno Usuario',
            'apellidoMaterno_usuario' => 'Apellido Materno Usuario',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
            'perfil_id_perfil' => 'Perfil Id Perfil',
            'horario_id_horario' => 'Horario Id Horario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComputadors()
    {
        return $this->hasMany(Computador::className(), ['usuario_id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcajes()
    {
        return $this->hasMany(Marcaje::className(), ['usuario_id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmartphones()
    {
        return $this->hasMany(Smartphone::className(), ['usuario_id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrabajos()
    {
        return $this->hasMany(Trabajo::className(), ['usuario_id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfilIdPerfil()
    {
        return $this->hasOne(Perfil::className(), ['id_perfil' => 'perfil_id_perfil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioIdHorario()
    {
        return $this->hasOne(Horario::className(), ['id_horario' => 'horario_id_horario']);
    }
}
