<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weekly_id')->unsigned();
            $table->foreign('weekly_id')->references('id')->on('weekly')->onDelete('cascade');
            $table->string('name');
            $table->integer('start_time')->unsigned();
            $table->integer('end_time')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('daily_events');
    }
}
