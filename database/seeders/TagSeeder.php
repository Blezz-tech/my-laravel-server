<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('tag')->insert([
            ['title'=>'Политика'],
            ['title'=>'Здоровый образ жизни'],
            ['title'=>'Отдых с семьей'],
            ['title'=>'Романтические отношения'],
        ]);
        \DB::table('post_tag')->insert([
            ['post_id'=>4, 'tag_id'=>1],
            ['post_id'=>4, 'tag_id'=>2],
            ['post_id'=>4, 'tag_id'=>3],
            ['post_id'=>5, 'tag_id'=>2],
            ['post_id'=>5, 'tag_id'=>3],
            ['post_id'=>6, 'tag_id'=>4],
            ['post_id'=>4, 'tag_id'=>5],
        ]);
    }
}
