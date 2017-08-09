<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterDestinationsCenters extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_destinations_centers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('destination_id');
            $table->integer('center_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_destinations_centers');
    }
}
