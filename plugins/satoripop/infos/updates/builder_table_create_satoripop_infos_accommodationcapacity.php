<?php namespace satoripop\Infos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopInfosAccommodationcapacity extends Migration
{
    public function up()
    {
        Schema::create('satoripop_infos_accommodationcapacity', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_infos_accommodationcapacity');
    }
}
