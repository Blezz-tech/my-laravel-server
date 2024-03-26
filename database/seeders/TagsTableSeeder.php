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

        \DB::table('tags')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Политика',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Здоровый образ жизни',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Отдых с семьей',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Романтические отношения',
            ),
        ));


    }
}
