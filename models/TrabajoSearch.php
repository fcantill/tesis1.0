<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trabajo;

/**
 * TrabajoSearch represents the model behind the search form about `app\models\Trabajo`.
 */
class TrabajoSearch extends Trabajo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_trabajo', 'usuario_id_usuario', 'campus_id_campus'], 'integer'],
            [['horario_trabajo', 'created', 'deleted', 'updated'], 'safe'],
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
        $query = Trabajo::find();

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
            'id_trabajo' => $this->id_trabajo,
            'usuario_id_usuario' => $this->usuario_id_usuario,
            'campus_id_campus' => $this->campus_id_campus,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'horario_trabajo', $this->horario_trabajo]);

        return $dataProvider;
    }
}
