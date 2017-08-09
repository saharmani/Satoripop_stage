<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterRequest extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_request', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('centername');
            $table->string('managername');
            $table->integer('tel');
            $table->string('ville');
            $table->string('pays');
            $table->text('question');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_request');
    }
}
