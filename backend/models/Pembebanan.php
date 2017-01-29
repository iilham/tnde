<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pembebanan".
 *
 * @property integer $id
 * @property integer $satker_id
 * @property string $unit_org_kode
 * @property string $program_kode
 * @property string $program
 * @property string $kegiatan_kode
 * @property string $kegiatan
 * @property string $output_kode
 * @property string $output
 * @property string $sub_output_kode
 * @property string $komponen_kode
 * @property string $komponen
 * @property string $sub_komponen_kode
 * @property string $sub_komponen
 * @property string $akun
 * @property string $detil
 */
class Pembebanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembebanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'satker_id', 'unit_org_kode', 'program_kode', 'program', 'kegiatan_kode', 'kegiatan', 'output_kode', 'output', 'komponen_kode', 'komponen', 'akun', 'detil'], 'required'],
            [['id', 'satker_id'], 'integer'],
            [['unit_org_kode', 'akun'], 'string', 'max' => 6],
            [['program_kode'], 'string', 'max' => 2],
            [['program', 'kegiatan', 'output', 'komponen', 'sub_komponen', 'detil'], 'string', 'max' => 255],
            [['kegiatan_kode'], 'string', 'max' => 4],
            [['output_kode', 'sub_output_kode', 'komponen_kode'], 'string', 'max' => 3],
            [['sub_komponen_kode'], 'string', 'max' => 1],
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
            'unit_org_kode' => 'Unit Org Kode',
            'program_kode' => 'Program Kode',
            'program' => 'Program',
            'kegiatan_kode' => 'Kegiatan Kode',
            'kegiatan' => 'Kegiatan',
            'output_kode' => 'Output Kode',
            'output' => 'Output',
            'sub_output_kode' => 'Sub Output Kode',
            'komponen_kode' => 'Komponen Kode',
            'komponen' => 'Komponen',
            'sub_komponen_kode' => 'Sub Komponen Kode',
            'sub_komponen' => 'Sub Komponen',
            'akun' => 'Akun',
            'detil' => 'Detil',
        ];
    }
}
