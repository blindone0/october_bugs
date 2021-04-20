<?php namespace Ihorr\Values\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrValuesValues extends Migration
{
    public function up()
    {
        Schema::create('ihorr_values_values', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('subname');
            $table->text('text');
            $table->string('img');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_values_values');
    }
}
