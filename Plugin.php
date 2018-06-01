<?php

namespace Kanboard\Plugin\Blueboard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/Blueboard/skin.css"));
    }

    public function getPluginName()
    {
        return 'Blueboard';
    }

    public function getPluginDescription()
    {
        return t('A CSS-only theme for Kanboard');
    }

    public function getPluginAuthor()
    {
        return bgibout;
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/bgibout/blueboard';
    }
}
