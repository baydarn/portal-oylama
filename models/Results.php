<?php

namespace kouosl\oylama\models;

use Yii;

/**
 * This is the model class for table "results".
 *
 * @property int $result_id
 * @property int $user_id
 * @property int $choise_id
 * @property int $ballot_id
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'choise_id', 'ballot_id'], 'required'],
            [['user_id', 'choise_id', 'ballot_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'result_id' => 'Result ID',
            'user_id' => 'User ID',
            'choise_id' => 'Choise ID',
            'ballot_id' => 'Ballot ID',
        ];
    }
}
