<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Customers')->delete();
        
        \DB::table('Customers')->insert(array (
            0 => 
            array (
                'cust_id' => '1000000001',
                'cust_name' => 'Village Toys',
                'cust_address' => '200 Maple Lane',
                'cust_city' => 'Detroit',
                'cust_state' => 'MI',
                'cust_zip' => '44444',
                'cust_country' => 'USA',
                'cust_contact' => 'John Smith',
                'cust_email' => 'sales@villagetoys.com',
            ),
            1 => 
            array (
                'cust_id' => '1000000002',
                'cust_name' => 'Kids Place',
                'cust_address' => '333 South Lake Drive',
                'cust_city' => 'Columbus',
                'cust_state' => 'OH',
                'cust_zip' => '43333',
                'cust_country' => 'USA',
                'cust_contact' => 'Michelle Green',
                'cust_email' => NULL,
            ),
            2 => 
            array (
                'cust_id' => '1000000003',
                'cust_name' => 'Fun4All',
                'cust_address' => '1 Sunny Place',
                'cust_city' => 'Muncie',
                'cust_state' => 'IN',
                'cust_zip' => '42222',
                'cust_country' => 'USA',
                'cust_contact' => 'Jim Jones',
                'cust_email' => 'jjones@fun4all.com',
            ),
            3 => 
            array (
                'cust_id' => '1000000004',
                'cust_name' => 'Fun4All',
                'cust_address' => '829 Riverside Drive',
                'cust_city' => 'Phoenix',
                'cust_state' => 'AZ',
                'cust_zip' => '88888',
                'cust_country' => 'USA',
                'cust_contact' => 'Denise L. Stephens',
                'cust_email' => 'dstephens@fun4all.com',
            ),
            4 => 
            array (
                'cust_id' => '1000000005',
                'cust_name' => 'The Toy Store',
                'cust_address' => '4545 53rd Street',
                'cust_city' => 'Chicago',
                'cust_state' => 'IL',
                'cust_zip' => '54545',
                'cust_country' => 'USA',
                'cust_contact' => 'Kim Howard',
                'cust_email' => NULL,
            ),
        ));
        
        
    }
}