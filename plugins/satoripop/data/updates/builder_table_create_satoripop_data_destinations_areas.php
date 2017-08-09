<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataDestinationsAreas extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_destinations_areas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('destination_id');
            $table->integer('area_id');
            $table->primary(['destination_id','area_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_destinations_areas');
    }
}
