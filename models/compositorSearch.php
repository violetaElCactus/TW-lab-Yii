<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\compositor;

/**
 * compositorSearch represents the model behind the search form of `app\models\compositor`.
 */
class compositorSearch extends compositor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pseudonimo', 'nombre', 'apellido', 'nacionalidad', 'nacimiento'], 'safe'],
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
        $query = compositor::find();

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
            'nacimiento' => $this->nacimiento,
        ]);

        $query->andFilterWhere(['like', 'pseudonimo', $this->pseudonimo])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad]);

        return $dataProvider;
    }
}
