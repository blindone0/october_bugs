<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMoviesActor2 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_actor', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_actor', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
