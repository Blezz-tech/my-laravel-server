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
        
        \DB::table('goods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Мясо',
                'description' => 'вкусное',
                'price' => '300.00',
                'created_at' => '2024-01-16 10:36:57',
                'updated_at' => '2024-01-16 10:36:57',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Молоко',
                'description' => 'свежее молоко натуральное',
                'price' => '80.00',
                'created_at' => '2024-01-16 10:36:57',
                'updated_at' => '2024-01-16 10:36:57',
            ),
        ));
        
        
    }
}