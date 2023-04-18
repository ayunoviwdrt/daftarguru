<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jadwal;

/**
 * JadwalSearch represents the model behind the search form of `app\models\Jadwal`.
 */
class JadwalSearch extends Jadwal
{
    public $kelas;
    public $guru;
    public $mapel;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kelas', 'id_guru', 'id_mapel','jam_mulai', 'jam_selesai', 'hari'], 'safe'],
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
        $query = Jadwal::find()->joinWith(['kelas', 'guru', 'mapel']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['kelas'] = [
            'asc' => ['kelas.nama' => SORT_ASC],
            'desc' => ['kelas.nama' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['guru'] = [
            'asc' => ['guru.nama' => SORT_ASC],
            'desc' => ['guru.nama' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['mapel'] = [
            'asc' => ['mapel.nama' => SORT_ASC],
            'desc' => ['mapel.nama' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            //'id' => $this->id,
            //'id_kelas' => $this->id_kelas,
            //'id_guru' => $this->id_guru,
            //'id_mapel' => $this->id_mapel,
            'jam_mulai' => $this->jam_mulai,
            'jam_selesai' => $this->jam_selesai,
            'hari' => $this->hari,
        ]);

        $query->andFilterWhere(['like', 'kelas.nama', $this->id_kelas])
        ->andFilterWhere(['like', 'guru.nama', $this->id_guru])
        ->andFilterWhere(['like', 'mapel.mapel', $this->id_mapel]);

        return $dataProvider;
    }
}
