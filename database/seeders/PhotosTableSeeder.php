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
        
        \DB::table('photos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Kошечки',
                'path' => '/img/images.jpg',
                'created_at' => '2023-12-01 06:50:29',
                'updated_at' => '2023-12-01 06:29:00',
                'description' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Котятки',
                'path' => '/img/catenok.jpg',
                'created_at' => '2023-12-01 06:50:29',
                'updated_at' => '2023-12-01 06:50:29',
                'description' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Малышки',
                'path' => '/img/babe.jpg',
                'created_at' => '2023-12-01 08:56:28',
                'updated_at' => '2023-12-01 08:56:28',
                'description' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Машинки',
                'path' => '/img/carr.jpg',
                'created_at' => '2023-12-08 10:40:04',
                'updated_at' => '2023-12-08 10:40:04',
                'description' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'мандаринки и бокальчик любимого игристого',
                'path' => '/img/66e2e073a0a74c5a8c38cba06aad9207.jpg',
                'created_at' => '2023-12-08 10:40:19',
                'updated_at' => '2023-12-08 10:40:19',
                'description' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Вкусняшки',
                'path' => '/img/img_5569_673.jpg',
                'created_at' => '2023-12-08 10:40:35',
                'updated_at' => '2023-12-08 10:40:35',
                'description' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:50:13',
                'updated_at' => '2023-12-08 12:50:13',
                'description' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:50:23',
                'updated_at' => '2023-12-08 12:50:23',
                'description' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:09',
                'updated_at' => '2023-12-08 12:55:09',
                'description' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:18',
                'updated_at' => '2023-12-08 12:55:18',
                'description' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:29',
                'updated_at' => '2023-12-08 12:55:29',
                'description' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'asd',
                'path' => 'asd',
                'created_at' => '2023-12-08 12:55:41',
                'updated_at' => '2023-12-08 12:55:41',
                'description' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'name' => '456',
                'path' => 'asdjghjg',
                'created_at' => '2023-12-08 12:55:59',
                'updated_at' => '2023-12-08 12:55:59',
                'description' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'ert6u',
                'path' => 'img/carr.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'aa',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => '1111',
                'path' => 'img/images.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '111',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => '222',
                'path' => 'img/carr.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '222',
            ),
        ));
        
        
    }
}