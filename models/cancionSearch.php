<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\cancion;

/**
 * cancionSearch represents the model behind the search form of `app\models\cancion`.
 */
class cancionSearch extends cancion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'genero', 'anio', 'compositor'], 'safe'],
            [['duracion'], 'integer'],
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
        $query = cancion::find();

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
            'duracion' => $this->duracion,
            'anio' => $this->anio,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'compositor', $this->compositor]);

        return $dataProvider;
    }
}
