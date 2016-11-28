<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%myblog_essay}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $writer
 * @property string $date
 */
class Essay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%myblog_essay}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['title', 'content', 'writer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'writer' => 'Writer',
            'date' => 'Date',
        ];
    }
    
    
    public function details() {
        $row = $this->find()->asArray()->all();
        return $row;
    }
    
    public function getInfoById($id) {
        $row = $this->find()->where([
            "id" => $id
        ])->asArray()->all();
//        var_dump($row);
//        die();
        return $row;
    }
}
