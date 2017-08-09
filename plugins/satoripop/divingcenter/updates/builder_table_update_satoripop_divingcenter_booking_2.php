<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatoripopDivingcenterBooking2 extends Migration
{
    public function up()
    {
        Schema::table('satoripop_divingcenter_booking', function($table)
        {
            $table->renameColumn('materiel', 'matriel');
        });
    }
    
    public function down()
    {
        Schema::table('satoripop_divingcenter_booking', function($table)
        {
            $table->renameColumn('matriel', 'materiel');
        });
    }
}
