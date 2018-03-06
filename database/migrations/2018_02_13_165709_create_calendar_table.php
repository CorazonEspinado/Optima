<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Calendars', function (Blueprint $table) {
           $table->increments('id');
            $table->datetime('event_type');
            $table->datetime('event_start');
             $table->string('event_end');
             $table->string('ispolnitelj');
             $table->string('room');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Calendar', function (Blueprint $table) {
            //
        });
    }
}
