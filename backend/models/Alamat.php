<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alamat".
 *
 * @property integer $satker_id
 * @property string $ibukota
 * @property string $alamat
 * @property string $telp
 * @property string $fax
 * @property string $website
 * @property string $email
 * @property integer $kode_pos
 */
class Alamat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alamat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['satker_id', 'ibukota', 'alamat', 'telp', 'website', 'email', 'kode_pos'], 'required'],
            [['satker_id', 'kode_pos'], 'integer'],
            [['alamat'], 'string'],
            [['ibukota'], 'string', 'max' => 255],
            [['telp', 'fax'], 'string', 'max' => 20],
            [['website', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'satker_id' => 'Satker ID',
            'ibukota' => 'Ibukota',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'fax' => 'Fax',
            'website' => 'Website',
            'email' => 'Email',
            'kode_pos' => 'Kode Pos',
        ];
    }
}
