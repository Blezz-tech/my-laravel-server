<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('tags')->delete();
        \DB::table('tags')->insert([
            ['title' => 'Политика'],
            ['title' => 'Здоровый образ жизни'],
            ['title' => 'Отдых с семьей'],
            ['title' => 'Романтические отношения'],
        ]);
    }
}
