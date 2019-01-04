<?php

namespace kouosl\oylama\models;

use Yii;

/**
 * This is the model class for table "choise".
 *
 * @property int $id
 * @property string $name
 * @property string $position
 */
class Choise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'position'], 'required'],
            [['name'], 'string', 'max' => 128],
            [['position'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
        ];
    }
}
