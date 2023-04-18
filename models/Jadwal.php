<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id
 * @property int $id_kelas
 * @property int $id_guru
 * @property int $id_mapel
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property string $hari
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id' => 'id_kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuru()
    {
        return $this->hasOne(Guru::className(), ['id' => 'id_guru']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel()
    {
        return $this->hasOne(Mapel::className(), ['id' => 'id_mapel']);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kelas', 'id_guru', 'id_mapel', 'jam_mulai', 'jam_selesai', 'hari'], 'required'],
            [['id_kelas', 'id_guru', 'id_mapel'], 'integer'],
            [['jam_mulai', 'jam_selesai'], 'safe'],
            [['hari'], 'string', 'max' => 25],
            [['id_kelas'], 'unique'],
            [['id_guru'], 'unique'],
            [['id_mapel'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kelas' => 'Kelas',
            'id_guru' => 'Guru',
            'id_mapel' => 'Mapel',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
            'hari' => 'Hari',
        ];
    }
}
