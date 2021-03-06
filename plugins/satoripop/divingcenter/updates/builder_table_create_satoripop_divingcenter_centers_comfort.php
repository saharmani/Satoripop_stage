<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersComfort extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_comfort', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('center_id');
            $table->integer('comfort_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_comfort');
    }
}
