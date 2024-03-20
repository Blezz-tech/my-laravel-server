<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('goods')->delete();

        \DB::table('goods')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'мясо',
                'description' => 'вкусное мяско',
                'price' => '300.00',
                'created_at' => '2024-01-16 10:05:50',
                'updated_at' => '2024-01-16 10:05:50',
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'сыр',
                'description' => 'сливочный сырок',
                'price' => '150.00',
                'created_at' => '2024-01-16 10:05:50',
                'updated_at' => '2024-01-16 10:05:50',
            ),
            2 =>
            array(
                'id' => 3,
                'title' => 'картошка',
                'description' => 'самая мягкая картошечка',
                'price' => '80.00',
                'created_at' => '2024-01-16 10:05:50',
                'updated_at' => '2024-01-16 10:05:50',
            ),
        ));
    }
}
