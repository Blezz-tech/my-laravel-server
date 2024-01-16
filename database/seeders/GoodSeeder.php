<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Facades\DB;
use Illuminate\Database\Seeder;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goods')->ignore_user_abort([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'price' => rand(100, 1000),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
