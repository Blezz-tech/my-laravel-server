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
        Schema::create('OrderItems', function (Blueprint $table) {
            $table->integer('order_num');
            $table->integer('order_item');
            $table->char('prod_id', 10)->index('fk_orderitems_products');
            $table->integer('quantity');
            $table->decimal('item_price');

            $table->primary(['order_num', 'order_item']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrderItems');
    }
};
