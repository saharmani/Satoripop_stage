<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersScubadiving extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_scubadiving', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('scubadiving_id');
            $table->integer('center_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_scubadiving');
    }
}
