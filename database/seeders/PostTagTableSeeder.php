<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_tag')->delete();
        
        \DB::table('post_tag')->insert(array (
            0 => 
            array (
                'post_id' => 1,
                'tag_id' => 1,
            ),
            1 => 
            array (
                'post_id' => 1,
                'tag_id' => 2,
            ),
            2 => 
            array (
                'post_id' => 1,
                'tag_id' => 3,
            ),
            3 => 
            array (
                'post_id' => 1,
                'tag_id' => 2,
            ),
            4 => 
            array (
                'post_id' => 2,
                'tag_id' => 3,
            ),
            5 => 
            array (
                'post_id' => 2,
                'tag_id' => 4,
            ),
            6 => 
            array (
                'post_id' => 2,
                'tag_id' => 4,
            ),
        ));
        
        
    }
}