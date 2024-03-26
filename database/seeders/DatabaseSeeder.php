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


        $this->call(GoodsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RubricsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CountrylanguageTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);
    }
}
