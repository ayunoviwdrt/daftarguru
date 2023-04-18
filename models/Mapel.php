<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mapel".
 *
 * @property int $id
 * @property string $mapel
 *
 * @property Jadwal $jadwal
 */
class Mapel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mapel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mapel'], 'required'],
            [['mapel'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mapel' => 'Mapel',
        ];
    }

    /**
     * Gets query for [[Jadwal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal()
    {
        return $this->hasOne(Jadwal::class, ['id_mapel' => 'id']);
    }
}
