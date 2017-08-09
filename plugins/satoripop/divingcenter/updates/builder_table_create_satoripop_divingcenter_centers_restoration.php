<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersRestoration extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_restoration', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('center_id');
            $table->integer('restoration_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_restoration');
    }
}
