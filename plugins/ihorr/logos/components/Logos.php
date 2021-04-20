<?php namespace Ihorr\Logos\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Logos\Models\Logo as LogosModel;

class Logos extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Logos Component',
            'description' => 'Виводить усі logos на сайті',
            
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAllLogos()
    {
        $prices = LogosModel::all();//collection ()

        return $prices->toArray();
    }
}
