<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataIntroductions extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_introductions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_introductions');
    }
}
