<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Orders')->delete();
        
        \DB::table('Orders')->insert(array (
            0 => 
            array (
                'order_num' => 20005,
                'order_date' => '2004-05-01 00:00:00',
                'cust_id' => '1000000001',
            ),
            1 => 
            array (
                'order_num' => 20006,
                'order_date' => '2004-01-12 00:00:00',
                'cust_id' => '1000000003',
            ),
            2 => 
            array (
                'order_num' => 20007,
                'order_date' => '2004-01-30 00:00:00',
                'cust_id' => '1000000004',
            ),
            3 => 
            array (
                'order_num' => 20008,
                'order_date' => '2004-02-03 00:00:00',
                'cust_id' => '1000000005',
            ),
            4 => 
            array (
                'order_num' => 20009,
                'order_date' => '2004-02-08 00:00:00',
                'cust_id' => '1000000001',
            ),
        ));
        
        
    }
}