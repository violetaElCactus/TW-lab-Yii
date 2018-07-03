<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\clase;

/**
 * claseSearch represents the model behind the search form of `app\models\clase`.
 */
class claseSearch extends clase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo', 'Ataque1', 'Ataque2', 'Ataque3'], 'safe'],
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
        $query = clase::find();

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
        $query->andFilterWhere(['like', 'Tipo', $this->Tipo])
            ->andFilterWhere(['like', 'Ataque1', $this->Ataque1])
            ->andFilterWhere(['like', 'Ataque2', $this->Ataque2])
            ->andFilterWhere(['like', 'Ataque3', $this->Ataque3]);

        return $dataProvider;
    }
}
