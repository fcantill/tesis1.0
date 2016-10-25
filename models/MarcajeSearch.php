<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marcaje;

/**
 * MarcajeSearch represents the model behind the search form about `app\models\Marcaje`.
 */
class MarcajeSearch extends Marcaje
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_marcaje', 'usuario_id_usuario', 'campus_id_campus'], 'integer'],
            [['hora_marcaje', 'puntoGeografico_marcaje', 'created', 'deleted', 'updated'], 'safe'],
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
        $query = Marcaje::find();

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
            'id_marcaje' => $this->id_marcaje,
            'usuario_id_usuario' => $this->usuario_id_usuario,
            'campus_id_campus' => $this->campus_id_campus,
            'hora_marcaje' => $this->hora_marcaje,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'puntoGeografico_marcaje', $this->puntoGeografico_marcaje]);

        return $dataProvider;
    }
}
