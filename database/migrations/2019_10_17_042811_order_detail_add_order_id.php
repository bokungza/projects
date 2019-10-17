<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderDetailAddOrderId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
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
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign(['id']);
            $table->dropColumn('id');
        });
        Schema::enableForeignKeyConstraints();
    }
}
