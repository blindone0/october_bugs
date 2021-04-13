<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMoviesMovies2 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_movies', function($table)
        {
            $table->text('extra');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_movies', function($table)
        {
            $table->dropColumn('extra');
        });
    }
}
