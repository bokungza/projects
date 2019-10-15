<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('orderid');
            $table->string('bank');
            $table->bigInteger('day');
            $table->bigInteger('month');
            $table->bigInteger('year');
            $table->bigInteger('hour');
            $table->bigInteger('minute');
            $table->string('firstname');
            $table->string('lastname');
            $table->float('cost');
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
        Schema::dropIfExists('pays');
    }
}
