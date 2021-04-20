<?php namespace Ihorr\Prices;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'Ihorr\Prices\Components\Prices'  => 'pricesLook'
        ];
    }

    public function registerSettings()
    {
    }
}
