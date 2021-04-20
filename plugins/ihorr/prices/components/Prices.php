<?php namespace Ihorr\Prices\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Prices\Models\Price as PricesModel;

class Prices extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Prices Component',
            'description' => 'Виводить усі тарифи на сайті',
            
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAllPrices()
    {
        $prices = PricesModel::all();//collection ()

        return $prices->toArray();
    }
}
