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

        \DB::table('post_tag')->delete();
        \DB::table('post_tag')->insert([
            ['post_id' => 1, 'tag_id' => 1],
            ['post_id' => 1, 'tag_id' => 2],
            ['post_id' => 1, 'tag_id' => 3],
            ['post_id' => 1, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 3],
            ['post_id' => 2, 'tag_id' => 4],
            ['post_id' => 2, 'tag_id' => 4],
        ]);
    }
}
