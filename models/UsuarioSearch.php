<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'perfil_id_perfil', 'horario_id_horario'], 'integer'],
            [['nombre_usuario', 'contrasena_usuario', 'correo_usuario', 'direccion_usuario', 'rut_usuario', 'apellidoPaterno_usuario', 'apellidoMaterno_usuario', 'created', 'deleted', 'updated'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_usuario' => $this->id_usuario,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
            'perfil_id_perfil' => $this->perfil_id_perfil,
            'horario_id_horario' => $this->horario_id_horario,
        ]);

        $query->andFilterWhere(['like', 'nombre_usuario', $this->nombre_usuario])
            ->andFilterWhere(['like', 'contrasena_usuario', $this->contrasena_usuario])
            ->andFilterWhere(['like', 'correo_usuario', $this->correo_usuario])
            ->andFilterWhere(['like', 'direccion_usuario', $this->direccion_usuario])
            ->andFilterWhere(['like', 'rut_usuario', $this->rut_usuario])
            ->andFilterWhere(['like', 'apellidoPaterno_usuario', $this->apellidoPaterno_usuario])
            ->andFilterWhere(['like', 'apellidoMaterno_usuario', $this->apellidoMaterno_usuario]);

        return $dataProvider;
    }
}
