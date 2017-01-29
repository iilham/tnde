<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat_tugas".
 *
 * @property integer $id
 * @property integer $nomor
 * @property integer $satker_id
 * @property integer $bulan
 * @property integer $tahun
 * @property string $menimbang
 * @property integer $dasar_id
 * @property string $tgl_mulai
 * @property string $tgl_akhir
 * @property integer $pembenanan_id
 * @property string $tgl_surtug
 * @property string $ttd_jabatan
 * @property string $ttd_nama
 * @property string $ttd_nip
 * @property integer $status
 * @property integer $create_at
 * @property integer $update_at
 */
class SuratTugas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat_tugas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor', 'satker_id', 'bulan', 'tahun', 'menimbang', 'dasar_id', 'tgl_mulai', 'tgl_akhir', 'pembenanan_id', 'tgl_surtug', 'ttd_jabatan', 'ttd_nama', 'ttd_nip', 'status', 'create_at', 'update_at'], 'required'],
            [['nomor', 'satker_id', 'bulan', 'tahun', 'dasar_id', 'pembenanan_id', 'status', 'create_at', 'update_at'], 'integer'],
            [['menimbang'], 'string'],
            [['tgl_mulai', 'tgl_akhir', 'tgl_surtug'], 'safe'],
            [['ttd_jabatan'], 'string', 'max' => 255],
            [['ttd_nama'], 'string', 'max' => 100],
            [['ttd_nip'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor' => 'Nomor',
            'satker_id' => 'Satker ID',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'menimbang' => 'Menimbang',
            'dasar_id' => 'Dasar ID',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_akhir' => 'Tgl Akhir',
            'pembenanan_id' => 'Pembenanan ID',
            'tgl_surtug' => 'Tgl Surtug',
            'ttd_jabatan' => 'Ttd Jabatan',
            'ttd_nama' => 'Ttd Nama',
            'ttd_nip' => 'Ttd Nip',
            'status' => 'Status',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
