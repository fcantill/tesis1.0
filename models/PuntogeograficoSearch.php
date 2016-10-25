<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Puntogeografico;

/**
 * PuntogeograficoSearch represents the model behind the search form about `app\models\Puntogeografico`.
 */
class PuntogeograficoSearch extends Puntogeografico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_puntoGeografico', 'radio_puntoGeografico', 'campus_id_campus'], 'integer'],
            [['nombre_puntoGeografico', 'created', 'deleted', 'updated'], 'safe'],
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
        $query = Puntogeografico::find();

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
            'id_puntoGeografico' => $this->id_puntoGeografico,
            'radio_puntoGeografico' => $this->radio_puntoGeografico,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
            'campus_id_campus' => $this->campus_id_campus,
        ]);

        $query->andFilterWhere(['like', 'nombre_puntoGeografico', $this->nombre_puntoGeografico]);

        return $dataProvider;
    }
}
