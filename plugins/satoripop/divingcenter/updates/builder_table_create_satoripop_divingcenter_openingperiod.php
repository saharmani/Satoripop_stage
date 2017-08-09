<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterOpeningperiod extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_openingperiod', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_openingperiod');
    }
}
