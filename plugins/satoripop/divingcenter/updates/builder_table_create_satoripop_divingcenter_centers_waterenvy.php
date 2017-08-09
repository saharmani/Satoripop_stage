<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersWaterenvy extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_waterenvy', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('center_id');
            $table->integer('waterenvy_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_waterenvy');
    }
}
