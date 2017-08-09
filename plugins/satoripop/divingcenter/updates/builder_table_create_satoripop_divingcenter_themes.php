<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterThemes extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_themes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_themes');
    }
}
