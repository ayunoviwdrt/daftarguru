<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "guru".
 *
 * @property int $id
 * @property string $nip
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $status
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'tempat_lahir', 'tanggal_lahir', 'agama', 'jenis_kelamin', 'status', 'alamat', 'telepon', 'email'], 'required'],
            [['nama', 'agama', 'alamat'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['nip', 'tempat_lahir', 'email'], 'string', 'max' => 32],
            [['jenis_kelamin'], 'string', 'max' => 15],
            [['status'], 'string', 'max' => 25],
            [['telepon'], 'string', 'max' => 26],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status' => 'Status',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'email' => 'Email',
        ];
    }
}
