<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "satker".
 *
 * @property integer $id
 * @property string $satker
 * @property integer $parent
 */
class Satker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'satker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'satker'], 'required'],
            [['id', 'parent'], 'integer'],
            [['satker'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'satker' => 'Satker',
            'parent' => 'Parent',
        ];
    }
}
