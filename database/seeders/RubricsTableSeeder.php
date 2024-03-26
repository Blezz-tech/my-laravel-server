<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RubricsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rubrics')->delete();
        
        \DB::table('rubrics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Политика',
                'description' => 'Да',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Здоровый образ жизни',
                'description' => 'Да',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Отдых с семьей',
                'description' => 'Даапа',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Романтические отношения',
                'description' => 'Даааа',
            ),
        ));
        
        
    }
}