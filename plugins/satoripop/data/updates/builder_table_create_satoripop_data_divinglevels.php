<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataDivinglevels extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_divinglevels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_divinglevels');
    }
}
