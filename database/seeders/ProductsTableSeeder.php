<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Products')->delete();
        
        \DB::table('Products')->insert(array (
            0 => 
            array (
                'prod_id' => 'BNBG01',
                'vend_id' => 'DLL01',
                'prod_name' => 'Fish bean bag toy',
                'prod_price' => '3.49',
                'prod_desc' => 'Fish bean bag toy, complete with bean bag worms with which to feed it',
            ),
            1 => 
            array (
                'prod_id' => 'BNBG02',
                'vend_id' => 'DLL01',
                'prod_name' => 'Bird bean bag toy',
                'prod_price' => '3.49',
                'prod_desc' => 'Bird bean bag toy, eggs are not included',
            ),
            2 => 
            array (
                'prod_id' => 'BNBG03',
                'vend_id' => 'DLL01',
                'prod_name' => 'Rabbit bean bag toy',
                'prod_price' => '3.49',
                'prod_desc' => 'Rabbit bean bag toy, comes with bean bag carrots',
            ),
            3 => 
            array (
                'prod_id' => 'BR01',
                'vend_id' => 'BRS01',
                'prod_name' => '8 inch teddy bear',
                'prod_price' => '5.99',
                'prod_desc' => '8 inch teddy bear, comes with cap and jacket',
            ),
            4 => 
            array (
                'prod_id' => 'BR02',
                'vend_id' => 'BRS01',
                'prod_name' => '12 inch teddy bear',
                'prod_price' => '8.99',
                'prod_desc' => '12 inch teddy bear, comes with cap and jacket',
            ),
            5 => 
            array (
                'prod_id' => 'BR03',
                'vend_id' => 'BRS01',
                'prod_name' => '18 inch teddy bear',
                'prod_price' => '11.99',
                'prod_desc' => '18 inch teddy bear, comes with cap and jacket',
            ),
            6 => 
            array (
                'prod_id' => 'RGAN01',
                'vend_id' => 'DLL01',
                'prod_name' => 'Raggedy Ann',
                'prod_price' => '4.99',
                'prod_desc' => '18 inch Raggedy Ann doll',
            ),
            7 => 
            array (
                'prod_id' => 'RYL01',
                'vend_id' => 'FNG01',
                'prod_name' => 'King doll',
                'prod_price' => '9.49',
                'prod_desc' => '12 inch king doll with royal garments and crown',
            ),
            8 => 
            array (
                'prod_id' => 'RYL02',
                'vend_id' => 'FNG01',
                'prod_name' => 'Queen doll',
                'prod_price' => '9.49',
                'prod_desc' => '12 inch queen doll with royal garments and crown',
            ),
        ));
        
        
    }
}