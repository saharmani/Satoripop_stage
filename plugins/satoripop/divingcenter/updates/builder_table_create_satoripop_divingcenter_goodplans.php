<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterGoodplans extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_goodplans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_goodplans');
    }
}
