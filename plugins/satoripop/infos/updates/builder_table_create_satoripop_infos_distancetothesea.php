<?php namespace satoripop\Infos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopInfosDistancetothesea extends Migration
{
    public function up()
    {
        Schema::create('satoripop_infos_distancetothesea', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_infos_distancetothesea');
    }
}
