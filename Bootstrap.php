<?php

namespace b4djo\seo;

use Yii;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if ($app->hasModule('seo') && ($module = $app->getModule('seo')) instanceof Module) {
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
}