<?php

namespace kouosl\oylama\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\oylama\models\Ballot;

/**
 * BallotSearch represents the model behind the search form of `vendor\kouosl\oylama\models\Ballot`.
 */
class BallotSearch extends Ballot
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ballot_id', 'user_type', 'user_id', 'choise_id'], 'integer'],
            [['ballot_type', 'ballot_started', 'ballot_ended', 'ballot_created'], 'safe'],
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
        $query = Ballot::find();

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
            'ballot_id' => $this->ballot_id,
            'user_type' => $this->user_type,
            'user_id' => $this->user_id,
            'ballot_started' => $this->ballot_started,
            'ballot_ended' => $this->ballot_ended,
            'ballot_created' => $this->ballot_created,
            'choise_id' => $this->choise_id,
        ]);

        $query->andFilterWhere(['like', 'ballot_type', $this->ballot_type]);

        return $dataProvider;
    }
}
