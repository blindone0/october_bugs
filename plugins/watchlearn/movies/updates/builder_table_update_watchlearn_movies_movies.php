<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMoviesMovies extends Migration
{
    public function up()
    {
        Schema::rename('watchlearn_movies_', 'watchlearn_movies_movies');
    }
    
    public function down()
    {
        Schema::rename('watchlearn_movies_movies', 'watchlearn_movies_');
    }
}
