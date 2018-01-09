<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'iclass', 'bed', 'status'], 'integer'],
            [['username', 'sex', 'idcate', 'dorm_id', 'adress', 'nation', 'major', 'birthday', 'photo', 'famname', 'hujiadress', 'stutel', 'weixin', 'qq', 'email', 'famtel', 'pro', 'city', 'area', 'rili', 'openid'], 'safe'],
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
        $query = Users::find();

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
            'id' => $this->id,
            'iclass' => $this->iclass,
            'birthday' => $this->birthday,
            'bed' => $this->bed,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'idcate', $this->idcate])
            ->andFilterWhere(['like', 'dorm_id', $this->dorm_id])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'famname', $this->famname])
            ->andFilterWhere(['like', 'hujiadress', $this->hujiadress])
            ->andFilterWhere(['like', 'stutel', $this->stutel])
            ->andFilterWhere(['like', 'weixin', $this->weixin])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'famtel', $this->famtel])
            ->andFilterWhere(['like', 'pro', $this->pro])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'rili', $this->rili])
            ->andFilterWhere(['like', 'openid', $this->openid]);

        return $dataProvider;
    }
}
