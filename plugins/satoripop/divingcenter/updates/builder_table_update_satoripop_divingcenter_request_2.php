<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatoripopDivingcenterRequest2 extends Migration
{
    public function up()
    {
        Schema::table('satoripop_divingcenter_request', function($table)
        {
            $table->integer('valider');
        });
    }
    
    public function down()
    {
        Schema::table('satoripop_divingcenter_request', function($table)
        {
            $table->dropColumn('valider');
        });
    }
}
