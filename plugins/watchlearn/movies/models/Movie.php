<?php namespace Watchlearn\Movies\Models;

use Model;
use Watchlearn\Movies\Models\Actor as ActorModel;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_movies_movies';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'actors' => [
            'Watchlearn\Movies\Models\Actor',
            'table' => 'watchlearn_movies_movie2actor'
        ]

    ];

    protected $jsonable = [
        'extra'

    ];

    public $translatable = [
        'extra',
        'name',
        'description'
    ];

    public function getActorsOptions()
    {
        $actors = ActorModel::all()->toArray();
        dd($actors);
        $options = array();

        foreach ($actors as $actor) {
            
           $options[$actor['id']] = $actor['firstname'] . ' ' .$actor['middlename'] . ' ' . $actor['lastname'];
        }
        dd($options);
        #return $options;
    }


}
