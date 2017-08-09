<?php namespace Satoripop\Dives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivesLevelsoftraining extends Migration
{
    public function up()
    {
        Schema::create('satoripop_dives_levelsoftraining', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('typeoftraining_id');
            $table->text('description')->nullable();
              $table->text('description2')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_dives_levelsoftraining');
    }
}
