<?php namespace Satoripop\Dives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivesTraining extends Migration
{
    public function up()
    {
        Schema::create('satoripop_dives_training', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_dives_training');
    }
}
