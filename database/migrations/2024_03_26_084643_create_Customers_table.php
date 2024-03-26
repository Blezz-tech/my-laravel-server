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
        Schema::create('Customers', function (Blueprint $table) {
            $table->char('cust_id', 10)->primary();
            $table->char('cust_name', 50);
            $table->char('cust_address', 50)->nullable();
            $table->char('cust_city', 50)->nullable();
            $table->char('cust_state', 5)->nullable();
            $table->char('cust_zip', 10)->nullable();
            $table->char('cust_country', 50)->nullable();
            $table->char('cust_contact', 50)->nullable();
            $table->char('cust_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customers');
    }
};
