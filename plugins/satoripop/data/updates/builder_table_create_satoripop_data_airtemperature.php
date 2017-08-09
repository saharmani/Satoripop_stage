<?php namespace satoripop\Data\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDataAirtemperature extends Migration
{
    public function up()
    {
        Schema::create('satoripop_data_airtemperature', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('january');
            $table->integer('february');
            $table->integer('march');
            $table->integer('april');
            $table->integer('may');
            $table->integer('june');
            $table->integer('july');
            $table->integer('august');
            $table->integer('september');
            $table->integer('october');
            $table->integer('november');
            $table->integer('december');
            
            
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_data_airtemperature');
    }
}
