<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePaysAddUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->bigIncrements('pays_id');
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
      Schema::disableForeignKeyConstraints();
      Schema::table('pays', function (Blueprint $table) {
          $table->dropForeign(['pay_id']);
          $table->dropColumn('pay_id');
      });
      Schema::enableForeignKeyConstraints();
    }
}
