<?php

namespace kouosl\oylama\models;

use Yii;

/**
 * This is the model class for table "ballot".
 *
 * @property int $ballot_id
 * @property string $ballot_type
 * @property int $user_type
 * @property int $user_id
 * @property string $ballot_started
 * @property string $ballot_ended
 * @property string $ballot_created
 * @property int $choise_id
 */
class Ballot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ballot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ballot_type'], 'string'],
            [['user_type', 'user_id', 'ballot_started', 'ballot_ended', 'ballot_created', 'choise_id'], 'required'],
            [['user_type', 'user_id', 'choise_id'], 'integer'],
            [['ballot_started', 'ballot_ended', 'ballot_created'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ballot_id' => 'Ballot ID',
            'ballot_type' => 'Ballot Type',
            'user_type' => 'User Type',
            'user_id' => 'User ID',
            'ballot_started' => 'Ballot Started',
            'ballot_ended' => 'Ballot Ended',
            'ballot_created' => 'Ballot Created',
            'choise_id' => 'Choise ID',
        ];
    }
}
