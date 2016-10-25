<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Smartphone;

/**
 * SmartphoneSearch represents the model behind the search form about `app\models\Smartphone`.
 */
class SmartphoneSearch extends Smartphone
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_smartphone', 'usuario_id_usuario', 'estado_id_estado'], 'integer'],
            [['imei_smartphone', 'created', 'deleted', 'updated'], 'safe'],
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
        $query = Smartphone::find();

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
            'id_smartphone' => $this->id_smartphone,
            'created' => $this->created,
            'deleted' => $this->deleted,
            'updated' => $this->updated,
            'usuario_id_usuario' => $this->usuario_id_usuario,
            'estado_id_estado' => $this->estado_id_estado,
        ]);

        $query->andFilterWhere(['like', 'imei_smartphone', $this->imei_smartphone]);

        return $dataProvider;
    }
}
