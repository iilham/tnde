<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property integer $id
 * @property string $nama
 * @property string $gelar
 * @property string $nip_lama
 * @property string $nip
 * @property string $jabatan
 * @property integer $satker_id
 * @property string $pangkat
 * @property string $golongan
 * @property string $tmt_golongan
 * @property string $pendidikan
 * @property string $tgl_lulus
 * @property integer $jenis_kelamin
 * @property string $tgl_lahir
 * @property string $email
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'gelar', 'nip_lama', 'nip', 'jabatan', 'satker_id', 'pangkat', 'golongan', 'tmt_golongan', 'pendidikan', 'tgl_lulus', 'jenis_kelamin', 'tgl_lahir', 'email'], 'required'],
            [['satker_id', 'jenis_kelamin'], 'integer'],
            [['tmt_golongan', 'tgl_lulus', 'tgl_lahir'], 'safe'],
            [['nama', 'gelar', 'pangkat', 'email'], 'string', 'max' => 50],
            [['nip_lama'], 'string', 'max' => 9],
            [['nip'], 'string', 'max' => 18],
            [['jabatan', 'pendidikan'], 'string', 'max' => 255],
            [['golongan'], 'string', 'max' => 5],
            [['email'], 'unique'],
            [['nip_lama'], 'unique'],
            [['nip'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'gelar' => 'Gelar',
            'nip_lama' => 'Nip Lama',
            'nip' => 'Nip',
            'jabatan' => 'Jabatan',
            'satker_id' => 'Satker ID',
            'pangkat' => 'Pangkat',
            'golongan' => 'Golongan',
            'tmt_golongan' => 'Tmt Golongan',
            'pendidikan' => 'Pendidikan',
            'tgl_lulus' => 'Tgl Lulus',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tgl_lahir' => 'Tgl Lahir',
            'email' => 'Email',
        ];
    }
}
