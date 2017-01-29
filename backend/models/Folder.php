<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "folder".
 *
 * @property integer $id
 * @property string $folder
 */
class Folder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'folder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'folder'], 'required'],
            [['id'], 'integer'],
            [['folder'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'folder' => 'Folder',
        ];
    }
}
