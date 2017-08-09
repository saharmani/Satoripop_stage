<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterMap extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_map', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('latitude');
            $table->integer('longutide');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_map');
    }
}
