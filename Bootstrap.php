<?php

namespace b4djo\seo;

use Yii;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        /*$app->getUrlManager()->addRules([
            'test' => 'mytest/test/index',
        ], false);*/

        $app->setModule('seo', 'b4djo\seo\Module');

        if (!isset($app->get('i18n')->translations['seo*'])) {
            $app->get('i18n')->translations['seo*'] = [
                'class' => PhpMessageSource::className(),
                'basePath' => __DIR__ . '/messages',
                'sourceLanguage' => 'en-US'
            ];
        }
    }
}