<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBOARDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BOARD', function (Blueprint $table) {
            $table->bigIncrements('ID_BOARD')->index();
            $table->bigInteger('FK_BEEUSER');
            $table->string('BOARD_NAME');
            $table->integer('SPEED_SEC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('BOARD');
    }
}
