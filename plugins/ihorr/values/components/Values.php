<?php namespace Ihorr\Values\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Values\Models\Value as ValuesModel;

class Values extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Values Component',
            'description' => 'Виводить усі values ',
            
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAllValues()
    {
        $values = ValuesModel::all();//collection ()

        return $values->toArray();
    }
}
