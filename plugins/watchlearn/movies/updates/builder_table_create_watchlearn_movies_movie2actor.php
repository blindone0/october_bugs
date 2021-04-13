<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnMoviesMovie2actor extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_movies_movie2actor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('actor_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_movies_movie2actor');
    }
}
