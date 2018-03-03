<?php

namespace b4djo\seo\components;

use b4djo\seo\models\SeoAttribute;
use b4djo\seo\models\SeoPage;
use b4djo\seo\traits\ModuleTrait;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\base\Object;

/**
 * Class Seo
 * @package b4djo\seo\components
 *
 * @property $removeUrlPrefix bool
 */
class Seo extends Object
{
    use ModuleTrait;

    public $removeUrlPrefix = false;

    protected $_page;
    protected $seoTags;
    
    private $metaBlock = [];
    private $tagBlock = [];
     
    public function init()
    {
        foreach (SeoAttribute::getMetaTags() as $tagName) {
            $this->metaBlock[] = $tagName->name;
        }
        
        foreach (SeoAttribute::getTags() as $tagName) {
            $this->tagBlock[] = $tagName->name;
        }
        
        Yii::$app->on(Controller::EVENT_BEFORE_ACTION, [$this, 'metaPage']);
    }
        
    public function metaPage()
    {
        $where['route'] = \Yii::$app->request->url;

        // Remove city alias from URL
        if ($this->removeUrlPrefix) {
            $where['route'] = strstr(ltrim($where['route'], '/'), '/');
        }

        $this->_page = SeoPage::find()->where($where)->asArray()->with('seoAttributes.tagName')->one();
        
        if (!is_null($this->_page) && ($where['route'])) {
            $this->renderMeta();
        }
    }
       
    protected function renderMeta()
    {
        foreach ($this->_page['seoAttributes'] as $seoAttribute) {
            if (in_array($seoAttribute['tagName']['name'], $this->metaBlock)) {
                
                Yii::$app->view->registerMetaTag([
                    'name'    => $seoAttribute['tagName']['name'],
                    'content' => $seoAttribute['content']
                ]);
            } else if (in_array($seoAttribute['tagName']['name'], $this->tagBlock)) {
                $this->seoTags[$seoAttribute['tagName']['name']] = $seoAttribute['content'];
            }
        }
    }
    
    public function tag($name)
    {
        if (!empty($this->seoTags)) {
            if (ArrayHelper::keyExists($name, $this->seoTags)) {
                return $this->seoTags[$name];
            }
        }
        return null;
    }
}