<?php

use Carbon\CarbonInterval;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user')->unsigned()->index();
            $table->integer('officehour_id')->unsigned()->index();
            $table->time('begin')->default(Carbon::now());
            $table->dateTime('duration')->default(CarbonInterval::minutes(10));
            $table->string('occasion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appointments');
    }
}
