<?php namespace Ihorr\Prices\Models;

use Model;

/**
 * Model
 */
class Price extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_prices_prices';

    protected $jsonable = ['desc'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
