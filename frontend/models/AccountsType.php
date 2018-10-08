<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "accounts_type".
 *
 * @property integer $acc_type_id
 * @property string $name
 * @property string $status
 */
class AccountsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounts_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acc_type_id' => 'Acc Type ID',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }
}
