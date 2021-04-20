<?php namespace Ihorr\Values;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ihorr\Values\Components\Values'  => 'valuesLook'
        ];
    }

    public function registerSettings()
    {
    }
}
