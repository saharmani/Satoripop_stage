<?php namespace satoripop\Prices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopPricesPrices extends Migration
{
    public function up()
    {
        Schema::create('satoripop_prices_prices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_prices_prices');
    }
}
