<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author' => 'Настя',
                'text' => 'Рецензия на статью не получена',
                'post_id' => 1,
                'created_at' => '2024-03-12 12:24:01',
                'updated_at' => '2024-03-12 12:24:01',
            ),
            1 => 
            array (
                'id' => 2,
                'author' => 'Саша',
                'text' => 'Рецензия на статью не получена жщцушаращц',
                'post_id' => 2,
                'created_at' => '2024-03-20 12:25:22',
                'updated_at' => '2024-03-27 12:25:22',
            ),
        ));
        
        
    }
}