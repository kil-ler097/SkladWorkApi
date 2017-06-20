<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constant".
 *
 * @property string $name
 * @property string $value
 */
class Skladinfo extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sklad_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id'], 'integer'],
            [['adress'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adress' => 'Adress',

        ];
    }



}
