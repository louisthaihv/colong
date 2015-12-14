<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('username')->unique();
            $table->string('password', 60)->default(\Hash::make('123456'));
            $table->date('birthday');
            $table->integer('role_id')->unsigned()->default(3);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('address');
            $table->string('phone');
            $table->boolean('status')->default(true);
            $table->integer('vip_level')->unsigned()->default(0);
            $table->integer('point')->unsigned()->default(0);
            $table->float('coints')->unsigned()->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
