<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftFresher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_freshers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_id');
            $table->string('name');
            $table->integer('KNB')->unsigned()->default(0);
            $table->integer('point')->unsigned()->default(0);
            $table->string('image');
            $table->string('description');
            $table->boolean('status')->default(false);
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
        Schema::drop('gift_freshers');
    }
}
