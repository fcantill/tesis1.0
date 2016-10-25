<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Computador;

/**
 * ComputadorSearch represents the model behind the search form about `app\models\Computador`.
 */
class ComputadorSearch extends Computador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_computador', 'estado_id_estado', 'usuario_id_usuario'], 'integer'],
            [['mac_computador', 'created', 'deleted', 'updated'], 'safe'],
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
        $query = Computador::find();

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
            'id_computador' => $this->id_computador,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
            'estado_id_estado' => $this->estado_id_estado,
            'usuario_id_usuario' => $this->usuario_id_usuario,
        ]);

        $query->andFilterWhere(['like', 'mac_computador', $this->mac_computador]);

        return $dataProvider;
    }
}
