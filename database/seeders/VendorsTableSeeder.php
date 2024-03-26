<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Vendors')->delete();
        
        \DB::table('Vendors')->insert(array (
            0 => 
            array (
                'vend_id' => 'BRE02',
                'vend_name' => 'Bear Emporium',
                'vend_address' => '500 Park Street',
                'vend_city' => 'Anytown',
                'vend_state' => 'OH',
                'vend_zip' => '44333',
                'vend_country' => 'USA',
            ),
            1 => 
            array (
                'vend_id' => 'BRS01',
                'vend_name' => 'Bears R Us',
                'vend_address' => '123 Main Street',
                'vend_city' => 'Bear Town',
                'vend_state' => 'MI',
                'vend_zip' => '44444',
                'vend_country' => 'USA',
            ),
            2 => 
            array (
                'vend_id' => 'DLL01',
                'vend_name' => 'Doll House Inc.',
                'vend_address' => '555 High Street',
                'vend_city' => 'Dollsville',
                'vend_state' => 'CA',
                'vend_zip' => '99999',
                'vend_country' => 'USA',
            ),
            3 => 
            array (
                'vend_id' => 'FNG01',
                'vend_name' => 'Fun and Games',
                'vend_address' => '42 Galaxy Road',
                'vend_city' => 'London',
                'vend_state' => NULL,
                'vend_zip' => 'N16 6PS',
                'vend_country' => 'England',
            ),
            4 => 
            array (
                'vend_id' => 'FRB01',
                'vend_name' => 'Furball Inc.',
                'vend_address' => '1000 5th Avenue',
                'vend_city' => 'New York',
                'vend_state' => 'NY',
                'vend_zip' => '11111',
                'vend_country' => 'USA',
            ),
            5 => 
            array (
                'vend_id' => 'JTS01',
                'vend_name' => 'Jouets et ours',
                'vend_address' => '1 Rue Amusement',
                'vend_city' => 'Paris',
                'vend_state' => NULL,
                'vend_zip' => '45678',
                'vend_country' => 'France',
            ),
        ));
        
        
    }
}