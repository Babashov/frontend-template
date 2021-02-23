<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about_us".
 *
 * @property int $id
 * @property string $title
 * @property string $paragraph
 * @property string $video_link
 * @property string $image
 * @property int $lang_id
 *
 * @property Languages $lang
 */
class AboutUs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_us';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'paragraph', 'video_link', 'lang_id'], 'required'],
            [['lang_id'], 'integer'],
            [['title', 'paragraph', 'video_link','image'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'paragraph' => 'Paragraph',
            'video_link' => 'Video Link',
            'lang_id' => 'Lang ID',
        ];
    }

    /**
     * Gets query for [[Lang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Languages::className(), ['id' => 'lang_id']);
    }
}
