<?php namespace Ihorr\Logos\Models;

use Model;

/**
 * Model
 */
class Logo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_logos_logos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
