<?php namespace Ihorr\Logos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrLogosLogos extends Migration
{
    public function up()
    {
        Schema::create('ihorr_logos_logos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('logo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_logos_logos');
    }
}
