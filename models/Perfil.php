<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property integer $id_perfil
 * @property string $permiso_perfil
 * @property string $nombre_perfil
 * @property string $created
 * @property string $deleted
 * @property string $updated
 *
 * @property Usuario[] $usuarios
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created', 'deleted', 'updated'], 'safe'],
            [['permiso_perfil', 'nombre_perfil'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_perfil' => 'Id Perfil',
            'permiso_perfil' => 'Permiso Perfil',
            'nombre_perfil' => 'Nombre Perfil',
            'created' => 'Created',
            'deleted' => 'Deleted',
            'updated' => 'Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['perfil_id_perfil' => 'id_perfil']);
    }
}
