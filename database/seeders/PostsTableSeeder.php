<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'ыгел',
                'content' => 'лыегл',
                'created_at' => '2024-03-12 12:26:23',
                'updated_at' => '2024-03-20 12:26:23',
                'rubric_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'kux',
                'content' => 'skksx',
                'created_at' => '2024-03-13 12:57:09',
                'updated_at' => '2024-03-27 12:57:09',
                'rubric_id' => 2,
            ),
        ));
        
        
    }
}