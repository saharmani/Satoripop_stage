<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersTraining extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_training', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('center_id');
            $table->integer('training_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_training');
    }
}
