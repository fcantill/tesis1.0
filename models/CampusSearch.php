<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Campus;

/**
 * CampusSearch represents the model behind the search form about `app\models\Campus`.
 */
class CampusSearch extends Campus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_campus'], 'integer'],
            [['nombre_campus', 'direccion_campus', 'created', 'deleted', 'updated'], 'safe'],
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
        $query = Campus::find();

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
            'id_campus' => $this->id_campus,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'nombre_campus', $this->nombre_campus])
            ->andFilterWhere(['like', 'direccion_campus', $this->direccion_campus]);

        return $dataProvider;
    }
}
