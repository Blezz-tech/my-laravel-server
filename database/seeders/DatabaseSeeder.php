<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountryTableSeeder::class);
        $this->call(CountrylanguageTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(Review::class);
    }
}
