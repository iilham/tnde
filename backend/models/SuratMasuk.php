<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat_masuk".
 *
 * @property integer $satker_id
 * @property integer $no_urut
 * @property integer $folder_id
 * @property string $tgl_terima
 * @property string $tgl_surat
 * @property string $perihal
 * @property string $tujuan
 * @property string $pengirim
 * @property string $alamat
 * @property string $tanggapan
 * @property string $sifat
 * @property string $ringkasan
 * @property string $keterangan
 * @property string $file
 * @property integer $status
 */
class SuratMasuk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat_masuk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['satker_id', 'no_urut', 'folder_id', 'tgl_terima', 'tgl_surat', 'perihal', 'tujuan', 'pengirim', 'tanggapan', 'sifat', 'ringkasan', 'keterangan', 'file', 'status'], 'required'],
            [['satker_id', 'no_urut', 'folder_id', 'status'], 'integer'],
            [['tgl_terima', 'tgl_surat'], 'safe'],
            [['alamat', 'tanggapan', 'sifat', 'ringkasan', 'keterangan'], 'string'],
            [['perihal', 'tujuan', 'pengirim', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'satker_id' => 'Satker ID',
            'no_urut' => 'No Urut',
            'folder_id' => 'Folder ID',
            'tgl_terima' => 'Tgl Terima',
            'tgl_surat' => 'Tgl Surat',
            'perihal' => 'Perihal',
            'tujuan' => 'Tujuan',
            'pengirim' => 'Pengirim',
            'alamat' => 'Alamat',
            'tanggapan' => 'Tanggapan',
            'sifat' => 'Sifat',
            'ringkasan' => 'Ringkasan',
            'keterangan' => 'Keterangan',
            'file' => 'File',
            'status' => 'Status',
        ];
    }
}
