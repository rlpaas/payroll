<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_leave".
 *
 * @property string $id
 * @property string $description
 * @property int $type
 */
class TypeLeave extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_type_leave';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'description', 'type'], 'required'],
            [['type'], 'integer'],
            [['id'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'type' => 'Type',
        ];
    }
}
