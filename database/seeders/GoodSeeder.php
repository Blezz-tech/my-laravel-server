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

        DB::table('photos')->insert([
            ["id" => 1, "name" => "Kошечки", "path" => "/img/cat.jpg", "created_at" => "2023-12-01 06:50:29", "updated_at" => "2023-12-01 06:29"],
            ["id" => 2, "name" => "Котятки", "path" => "/img/catenok.jpg", "created_at" => "2023-12-01 06:50:29", "updated_at" => "2023-12-01 06:50:29"],
            ["id" => 4, "name" => "Малышки", "path" => "/img/child.jpg", "created_at" => "2023-12-01 08:56:28", "updated_at" => "2023-12-01 08:56:28"],
            ["id" => 5, "name" => "Машинки", "path" => "/img/car.jpg", "created_at" => "2023-12-08 10:40:04", "updated_at" => "2023-12-08 10:40:04"],
            ["id" => 6, "name" => "Бананчики", "path" => "/img/banan.jpg", "created_at" => "2023-12-08 10:40:19", "updated_at" => "2023-12-08 10:40:19"],
            ["id" => 7, "name" => "Вкусняшки", "path" => "/img/ponchiki.jpg", "created_at" => "2023-12-08 10:40:35", "updated_at" => "2023-12-08 10:40:35"],
            ["id" => 8, "name" => "asd", "path" => "asd", "created_at" => "2023-12-08 12:50:13", "updated_at" => "2023-12-08 12:50:13"],
            ["id" => 9, "name" => "asd", "path" => "asd", "created_at" => "2023-12-08 12:50:23", "updated_at" => "2023-12-08 12:50:23"],
            ["id" => 10, "name" => "asd", "path" => "asd", "created_at" => "2023-12-08 12:55:09", "updated_at" => "2023-12-08 12:55:09"],
            ["id" => 11, "name" => "asd", "path" => "asd", "created_at" => "2023-12-08 12:55:18", "updated_at" => "2023-12-08 12:55:18"],
            ["id" => 12, "name" => "asd", "path" => "asd", "created_at" => "2023-12-08 12:55:29", "updated_at" => "2023-12-08 12:55:29"],
            ["id" => 13, "name" => "asd", "path" => "asd", "created_at" => "2023-12-08 12:55:41", "updated_at" => "2023-12-08 12:55:41"],
            ["id" => 14, "name" => "456", "path" => "asdjghjg", "created_at" => "2023-12-08 12:55:59", "updated_at" => "2023-12-08 12:55:59"],
        ]);
    }
}
