<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCentersThemes extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers_themes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('center_id');
            $table->integer('theme_id');
            $table->primary(['center_id','theme_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers_themes');
    }
}
