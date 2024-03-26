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
        Schema::create('Vendors', function (Blueprint $table) {
            $table->char('vend_id', 10)->primary();
            $table->char('vend_name', 50);
            $table->char('vend_address', 50)->nullable();
            $table->char('vend_city', 50)->nullable();
            $table->char('vend_state', 5)->nullable();
            $table->char('vend_zip', 10)->nullable();
            $table->char('vend_country', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vendors');
    }
};
