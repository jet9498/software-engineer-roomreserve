<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('table', function (Blueprint $table) {
          $table->increments('TableID');
          $table->integer('roomID');
          $table->string('Subject');
          $table->string('Name');
          $table->string('Day');
          $table->time('TableStart');
          $table->time('TableEnd');
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
        Schema::dropIfExists('table');
    }
}
