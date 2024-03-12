<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('photos')->delete();

        \DB::table('photos')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Kошечки',
                'path' => '/img/cat.jpg',
                'created_at' => '2023-12-01 06:50:29',
                'updated_at' => '2023-12-01 06:29:00',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Котятки',
                'path' => '/img/catenok.jpg',
                'created_at' => '2023-12-01 06:50:29',
                'updated_at' => '2023-12-01 06:50:29',
            ),
            2 =>
            array(
                'id' => 4,
                'name' => 'Малышки',
                'path' => '/img/child.jpg',
                'created_at' => '2023-12-01 08:56:28',
                'updated_at' => '2023-12-01 08:56:28',
            ),
            3 =>
            array(
                'id' => 5,
                'name' => 'Машинки',
                'path' => '/img/car.jpg',
                'created_at' => '2023-12-08 10:40:04',
                'updated_at' => '2023-12-08 10:40:04',
            ),
            4 =>
            array(
                'id' => 6,
                'name' => 'Бананчики',
                'path' => '/img/banan.jpg',
                'created_at' => '2023-12-08 10:40:19',
                'updated_at' => '2023-12-08 10:40:19',
            ),
            5 =>
            array(
                'id' => 7,
                'name' => 'Вкусняшки',
                'path' => '/img/ponchiki.jpg',
                'created_at' => '2023-12-08 10:40:35',
                'updated_at' => '2023-12-08 10:40:35',
            ),
            6 =>
            array(
                'id' => 8,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:50:13',
                'updated_at' => '2023-12-08 12:50:13',
            ),
            7 =>
            array(
                'id' => 9,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:50:23',
                'updated_at' => '2023-12-08 12:50:23',
            ),
            8 =>
            array(
                'id' => 10,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:09',
                'updated_at' => '2023-12-08 12:55:09',
            ),
            9 =>
            array(
                'id' => 11,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:18',
                'updated_at' => '2023-12-08 12:55:18',
            ),
            10 =>
            array(
                'id' => 12,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:29',
                'updated_at' => '2023-12-08 12:55:29',
            ),
            11 =>
            array(
                'id' => 13,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:41',
                'updated_at' => '2023-12-08 12:55:41',
            ),
            12 =>
            array(
                'id' => 14,
                'name' => '456',
                'path' => 'asdjghjg',
                'created_at' => '2023-12-08 12:55:59',
                'updated_at' => '2023-12-08 12:55:59',
            ),
        ));
    }
}
