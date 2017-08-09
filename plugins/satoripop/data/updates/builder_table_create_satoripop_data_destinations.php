<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataDestinations extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_destinations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('vat')->nullable();
            $table->boolean('home');
            $table->boolean('inactive')->nullable();
            $table->text('inactive_text')->nullable();
            $table->text('car_rental_link')->nullable();
            $table->text('description')->nullable();
            $table->text('description_of_the_fauna')->nullable();
            $table->string('alt')->nullable();
            $table->string('link_find_flight')->nullable();
             $table->string('best_months')->nullable();
             $table->integer('area_id');
             $table->integer('airtemperature_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_destinations');
    }
}
