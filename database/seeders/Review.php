<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Review extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \DB::table('review')->delete();

        \DB::table('review')->insert(array(
            0 => array(
                'id' => 1,
                'author' => 'Kошечки',
                'text' => 'Рецензия на статью не проверена',
                'created_at' => '2023-12-01 06:50:29',
                'updated_at' => '2023-12-01 06:29:00',
            ),
             1 => array(
                'id' => 2,
                'author' => 'Пёсики',
                'text' => 'Рецензия на статью проверена',
                'created_at' => '2023-12-01 06:50:29',
                'updated_at' => '2023-12-01 06:29:00',
             )
        ));
    }
}
