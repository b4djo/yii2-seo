<?php

namespace b4djo\seo\traits;

use b4djo\seo\Module;

/**
 * Trait ModuleTrait
 * @property-read Module $module
 * @package b4djo\seo\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('seo');
    }
}
