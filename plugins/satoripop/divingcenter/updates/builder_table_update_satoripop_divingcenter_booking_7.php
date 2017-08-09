<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatoripopDivingcenterBooking7 extends Migration
{
    public function up()
    {
        Schema::table('satoripop_divingcenter_booking', function($table)
        {
            $table->string('booking_no');
        });
    }
    
    public function down()
    {
        Schema::table('satoripop_divingcenter_booking', function($table)
        {
            $table->dropColumn('booking_no');
        });
    }
}
