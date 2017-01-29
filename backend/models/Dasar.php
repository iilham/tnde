<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dasar".
 *
 * @property integer $id
 * @property integer $satker_id
 * @property string $jenis
 * @property string $nomor
 * @property string $tanggal
 * @property string $perihal
 * @property string $isi
 */
class Dasar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dasar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['satker_id', 'jenis', 'nomor', 'perihal', 'isi'], 'required'],
            [['satker_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['isi'], 'string'],
            [['jenis', 'nomor'], 'string', 'max' => 100],
            [['perihal'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'satker_id' => 'Satker ID',
            'jenis' => 'Jenis',
            'nomor' => 'Nomor',
            'tanggal' => 'Tanggal',
            'perihal' => 'Perihal',
            'isi' => 'Isi',
        ];
    }
}
