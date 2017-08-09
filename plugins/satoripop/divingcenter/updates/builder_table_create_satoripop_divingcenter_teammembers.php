<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterTeammembers extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_teammembers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('job')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_teammembers');
    }
}
