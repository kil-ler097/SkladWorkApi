<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property string $t1
 * @property string $t2
 * @property string $t3
 * @property string $c11
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['t1', 't2', 't3', 'c11'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            't1' => 'T1',
            't2' => 'T2',
            't3' => 'T3',
            'c11' => 'C11',
        ];
    }
}
