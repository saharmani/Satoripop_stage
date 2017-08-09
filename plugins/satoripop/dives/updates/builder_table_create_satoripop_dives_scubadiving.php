<?php namespace Satoripop\Dives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivesScubadiving extends Migration
{
    public function up()
    {
        Schema::create('satoripop_dives_scubadiving', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_dives_scubadiving');
    }
}
