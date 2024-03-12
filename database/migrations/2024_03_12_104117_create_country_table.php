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
        Schema::create('country', function (Blueprint $table) {
            $table->char('Code', 3)->default('')->primary();
            $table->char('Name', 52)->default('');
            $table->enum('Continent', ['Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America'])->default('Asia');
            $table->char('Region', 26)->default('');
            $table->decimal('SurfaceArea', 10)->default(0);
            $table->smallInteger('IndepYear')->nullable();
            $table->integer('Population')->default(0);
            $table->decimal('LifeExpectancy', 3, 1)->nullable();
            $table->decimal('GNP', 10)->nullable();
            $table->decimal('GNPOld', 10)->nullable();
            $table->char('LocalName', 45)->default('');
            $table->char('GovernmentForm', 45)->default('');
            $table->char('HeadOfState', 60)->nullable();
            $table->integer('Capital')->nullable();
            $table->char('Code2', 2)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
};
