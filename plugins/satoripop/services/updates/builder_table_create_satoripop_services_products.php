<?php namespace satoripop\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopServicesProducts extends Migration
{
    public function up()
    {
        Schema::create('satoripop_services_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_services_products');
    }
}
