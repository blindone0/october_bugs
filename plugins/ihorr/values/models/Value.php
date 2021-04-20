<?php namespace Ihorr\Values\Models;

use Model;

/**
 * Model
 */
class Value extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_values_values';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
