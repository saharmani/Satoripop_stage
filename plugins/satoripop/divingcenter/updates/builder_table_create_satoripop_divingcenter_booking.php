<?php namespace satoripop\DivingCenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatoripopDivingcenterBooking extends Migration
{
    public function up()
    {
        Schema::create('satoripop_divingcenter_booking', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->integer('prenom');
            $table->text('email');
            $table->text('niveau');
            $table->string('age');
            $table->string('todo');
            $table->string('type');
            $table->string('date');
            $table->string('preference');
            $table->boolean('flexible');
            $table->boolean('materiel');
            $table->text('commentaire');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satoripop_divingcenter_booking');
    }
}
