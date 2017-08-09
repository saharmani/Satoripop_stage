<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterCenters extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_centers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('destination_id');
            $table->string('centercode');
            $table->string('emailprefacture');
            $table->string('test');
            $table->integer('distancetothesea_id');
            $table->string('adresse');
            $table->string('codepostal');
            $table->string('pays');
            $table->integer('affiliation_id');
            $table->integer('accommodationcapacity_id');
            $table->integer('numberofboats_id');
            $table->integer('boatcapacity_id');
            $table->integer('numberofboat_id');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_centers');
    }
}
