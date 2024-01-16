<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goods')->insert([
            [
                'title' => 'Мясо',
                'description' => 'вкусное',
                'price' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Молоко',
                'description' => 'свежее молоко натуральное',
                'price' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
