<?php

namespace b4djo\seo\models;

/**
 * This is the model class for table "seo_page_attribute".
 *
 * @property integer $id
 * @property integer $page_id
 * @property integer $attribute_id
 * @property string $content
 */
class SeoPageAttribute extends \yii\db\ActiveRecord
{
    /**
     * Label on page Create Seo Page
     * @var
     */
    private $_labelForm;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo_page_attribute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'attribute_id', 'content'], 'required'],
            [['page_id', 'attribute_id'], 'integer'],
            [['content'], 'string'],
            [['page_id', 'attribute_id'], 'unique', 'targetAttribute' => ['page_id', 'attribute_id'], 'message' => 'The combination of Page ID and Attribute ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'attribute_id' => 'Attribute ID',
            'content' => 'Content',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagName()
    {
        return $this->hasOne(SeoAttribute::className(), ['id' => 'attribute_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPageRoute()
    {
        return $this->hasOne(SeoPage::className(), ['id' => 'page_id']);
    }
    
    /**
     * Возвращется список записей
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function listAll()
    {
        return self::find()->asArray()->all();
    }
    
    /**
     * Возвращает label атрибута
     * @return mixed
     */
    public function getLabelForm()
    {
        return $this->tagName->name;
    }
}
