<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataCentersDestinations extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_centers_destinations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('destination_id');
            $table->integer('center_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_centers_destinations');
    }
}
