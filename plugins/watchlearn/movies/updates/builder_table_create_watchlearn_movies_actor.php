<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnMoviesActor extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_movies_actor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('middlename', 100);
            $table->date('dateofbirth')->nullable();
            $table->text('bio');
            $table->string('photo', 350);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_movies_actor');
    }
}
