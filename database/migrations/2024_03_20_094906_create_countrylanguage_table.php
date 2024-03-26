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
        Schema::create('countrylanguage', function (Blueprint $table) {
            $table->char('CountryCode', 3)->default('')->index('countrycode');
            $table->char('Language', 30)->default('');
            $table->enum('IsOfficial', ['T', 'F'])->default('F');
            $table->decimal('Percentage', 4, 1)->default(0);

            $table->primary(['CountryCode', 'Language']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countrylanguage');
    }
};
