<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goods')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'price' => rand(100, 1000),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
