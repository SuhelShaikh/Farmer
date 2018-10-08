<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property integer $acc_id
 * @property integer $acc_type_id
 * @property string $name
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acc_type_id', 'name'], 'required'],
            [['acc_type_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acc_id' => 'Acc ID',
            'acc_type_id' => 'Acc Type ID',
            'name' => 'Name',
        ];
    }
}
