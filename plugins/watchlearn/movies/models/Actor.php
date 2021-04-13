<?php namespace Watchlearn\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_movies_actor';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'movies' => [
            'Watchlearn\Movies\Models\Movie',
            'table' => 'watchlearn_movies_movie2actor'
        ]
    ];

    public $translatable = [
        'firstname',
        'lastname',
        'middlename',
        'bio'
    ];
}
