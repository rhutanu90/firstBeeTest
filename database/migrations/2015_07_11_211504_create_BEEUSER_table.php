<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBEEUSERTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BEEUSER', function (Blueprint $table) {
            $table->bigIncrements('ID_BEEUSER')->index();
            $table->string('USERNAME')->unique();
            $table->string('PASSWORD');
            $table->string('FIRST_NAME');
            $table->string('LAST_NAME');
            $table->string('EMAIL')->unique();
            $table->string('PHONE')->unique();
            $table->boolean('STATUS');
            $table->boolean('DELETED');
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
        Schema::drop('BEEUSER');
    }
}
