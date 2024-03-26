<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('post_tag')->insert([
            ['post_id' => 4, 'tag_id' => 1],
            ['post_id' => 4, 'tag_id' => 2],
            ['post_id' => 4, 'tag_id' => 3],
            ['post_id' => 5, 'tag_id' => 2],
            ['post_id' => 5, 'tag_id' => 3],
            ['post_id' => 6, 'tag_id' => 4],
            ['post_id' => 4, 'tag_id' => 5],
        ]);
    }
}
