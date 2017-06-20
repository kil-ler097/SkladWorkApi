<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constant".
 *
 * @property string $name
 * @property string $value
 */
class Sklad extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sklad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Sklad name',

        ];
    }



}
