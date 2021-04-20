<?php namespace Ihorr\Logos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrLogosLogos extends Migration
{
    public function up()
    {
        Schema::table('ihorr_logos_logos', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ihorr_logos_logos', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
