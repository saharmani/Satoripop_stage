<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatoripopDivingcenterBooking extends Migration
{
    public function up()
    {
        Schema::table('satoripop_divingcenter_booking', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->date('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('satoripop_divingcenter_booking', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('date', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
