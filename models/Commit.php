<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commit".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property integer $xxx
 */
class Commit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['xxx'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'xxx' => 'Xxx',
        ];
    }
}
