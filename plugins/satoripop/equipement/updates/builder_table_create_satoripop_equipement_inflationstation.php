<?php namespace satoripop\Equipement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopEquipementInflationstation extends Migration
{
    public function up()
    {
        Schema::create('satoripop_equipement_inflationstations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_equipement_inflationstations');
    }
}
