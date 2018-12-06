<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomlists', function (Blueprint $table) {
            $table->increments('roomID');
            $table->string('roomName');
            $table->string('roomDescription');
            $table->integer('status');
            $table->rememberToken()->nullable();
            $table->string('imgUrl')->nullable();
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
        Schema::drop('roomlists');
    }
}
