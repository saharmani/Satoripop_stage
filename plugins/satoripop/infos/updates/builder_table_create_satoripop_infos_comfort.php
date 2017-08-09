<?php namespace satoripop\Infos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopInfosComfort extends Migration
{
    public function up()
    {
        Schema::create('satoripop_infos_comfort', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_infos_comfort');
    }
}
