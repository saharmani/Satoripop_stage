<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataAreas extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_areas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('longutide')->nullable();
            $table->string('latitude')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_areas');
    }
}
