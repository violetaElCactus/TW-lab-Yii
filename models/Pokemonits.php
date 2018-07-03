<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pokemon;

/**
 * Pokemonits represents the model behind the search form of `app\models\Pokemon`.
 */
class Pokemonits extends Pokemon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Color', 'Mote'], 'safe'],
            [['Peso'], 'integer'],
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
        $query = Pokemon::find();

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
            'Peso' => $this->Peso,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Color', $this->Color])
            ->andFilterWhere(['like', 'Mote', $this->Mote]);

        return $dataProvider;
    }
}
