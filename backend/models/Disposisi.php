<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "disposisi".
 *
 * @property integer $satker_id
 * @property integer $no_urut
 * @property string $tgl_terima
 * @property string $keamanan
 * @property string $tgl_penyeesaian
 * @property string $disposisi
 * @property string $nama
 * @property integer $status
 */
class Disposisi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disposisi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['satker_id', 'no_urut', 'tgl_terima', 'keamanan', 'tgl_penyeesaian', 'disposisi', 'nama', 'status'], 'required'],
            [['satker_id', 'no_urut', 'status'], 'integer'],
            [['tgl_terima', 'tgl_penyeesaian'], 'safe'],
            [['keamanan', 'disposisi'], 'string'],
            [['nama'], 'string', 'max' => 100],
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
            'tgl_terima' => 'Tgl Terima',
            'keamanan' => 'Keamanan',
            'tgl_penyeesaian' => 'Tgl Penyeesaian',
            'disposisi' => 'Disposisi',
            'nama' => 'Nama',
            'status' => 'Status',
        ];
    }
}
