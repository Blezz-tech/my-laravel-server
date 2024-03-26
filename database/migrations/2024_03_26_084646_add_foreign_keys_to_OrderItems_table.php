<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('OrderItems', function (Blueprint $table) {
            $table->foreign(['order_num'], 'FK_OrderItems_Orders')->references(['order_num'])->on('Orders')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['prod_id'], 'FK_OrderItems_Products')->references(['prod_id'])->on('Products')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('OrderItems', function (Blueprint $table) {
            $table->dropForeign('FK_OrderItems_Orders');
            $table->dropForeign('FK_OrderItems_Products');
        });
    }
};
