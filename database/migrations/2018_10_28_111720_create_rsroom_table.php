<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsrooms', function (Blueprint $table) {
            $table->increments('RsroomID');
            $table->integer('roomID');
            $table->integer('userID');
            $table->datetime('RsStart');
            $table->datetime('RsEnd');
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
        Schema::dropIfExists('rsroom');
    }
}
