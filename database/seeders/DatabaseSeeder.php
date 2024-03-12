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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     PhotosTableSeeder::class,
        //     GoodsTableSeeder::class,
        // ]);
        $this->call(CatalogPhotoTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CountrylanguageTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetTokensTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
