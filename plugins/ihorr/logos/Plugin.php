<?php namespace Ihorr\Logos;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ihorr\Logos\Components\Logos'  => 'logosLook'
        ];
    }

    public function registerSettings()
    {
    }
}
