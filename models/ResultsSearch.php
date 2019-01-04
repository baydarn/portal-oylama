<?php

namespace kouosl\oylama\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\oylama\models\Results;

/**
 * ResultsSearch represents the model behind the search form of `vendor\kouosl\oylama\models\Results`.
 */
class ResultsSearch extends Results
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['result_id', 'user_id', 'choise_id', 'ballot_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Results::find();

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
            'result_id' => $this->result_id,
            'user_id' => $this->user_id,
            'choise_id' => $this->choise_id,
            'ballot_id' => $this->ballot_id,
        ]);

        return $dataProvider;
    }
}
