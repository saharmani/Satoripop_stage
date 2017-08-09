<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersBaptisms extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_baptisms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('baptisms_id');
            $table->integer('center_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_baptisms');
    }
}
