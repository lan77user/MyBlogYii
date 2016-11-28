<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%myblog_tails}}".
 *
 * @property integer $id
 * @property string $writer
 * @property string $postday
 */
class Tails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%myblog_tails}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['postday'], 'safe'],
            [['writer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'writer' => 'Writer',
            'postday' => 'Postday',
        ];
    }
    
    
    public function getInfo() {
        $info = $this->find()->asArray()->all();
        return $info;
    }
}
