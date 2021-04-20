<?php namespace Ihorr\Prices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrPricesPrices extends Migration
{
    public function up()
    {
        Schema::create('ihorr_prices_prices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('price');
            $table->string('img');
            $table->text('desc');
            $table->string('link');
            $table->boolean('is_iconed');
            $table->string('color');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_prices_prices');
    }
}
