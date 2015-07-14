<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFEEDTYPETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FEEDTYPE', function (Blueprint $table) {
            $table->bigIncrements('ID_FEEDTYPE')->index();
            $table->string('FEEDTYPE_NAME');
            $table->string('FEEDTYPE_DESCRIPTION');
            $table->boolean('AUTO_POST');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('FEEDTYPE');
    }
}
