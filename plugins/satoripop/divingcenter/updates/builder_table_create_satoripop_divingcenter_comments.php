<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterComments extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('average_grade');
            $table->boolean('published');
            $table->string('description');
            $table->string('newsletter');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_comments');
    }
}
