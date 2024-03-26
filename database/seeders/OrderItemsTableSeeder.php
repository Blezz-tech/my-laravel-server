<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('OrderItems')->delete();
        
        \DB::table('OrderItems')->insert(array (
            0 => 
            array (
                'order_num' => 20005,
                'order_item' => 1,
                'prod_id' => 'BR01',
                'quantity' => 100,
                'item_price' => '5.49',
            ),
            1 => 
            array (
                'order_num' => 20005,
                'order_item' => 2,
                'prod_id' => 'BR03',
                'quantity' => 100,
                'item_price' => '10.99',
            ),
            2 => 
            array (
                'order_num' => 20006,
                'order_item' => 1,
                'prod_id' => 'BR01',
                'quantity' => 20,
                'item_price' => '5.99',
            ),
            3 => 
            array (
                'order_num' => 20006,
                'order_item' => 2,
                'prod_id' => 'BR02',
                'quantity' => 10,
                'item_price' => '8.99',
            ),
            4 => 
            array (
                'order_num' => 20006,
                'order_item' => 3,
                'prod_id' => 'BR03',
                'quantity' => 10,
                'item_price' => '11.99',
            ),
            5 => 
            array (
                'order_num' => 20007,
                'order_item' => 1,
                'prod_id' => 'BR03',
                'quantity' => 50,
                'item_price' => '11.49',
            ),
            6 => 
            array (
                'order_num' => 20007,
                'order_item' => 2,
                'prod_id' => 'BNBG01',
                'quantity' => 100,
                'item_price' => '2.99',
            ),
            7 => 
            array (
                'order_num' => 20007,
                'order_item' => 3,
                'prod_id' => 'BNBG02',
                'quantity' => 100,
                'item_price' => '2.99',
            ),
            8 => 
            array (
                'order_num' => 20007,
                'order_item' => 4,
                'prod_id' => 'BNBG03',
                'quantity' => 100,
                'item_price' => '2.99',
            ),
            9 => 
            array (
                'order_num' => 20007,
                'order_item' => 5,
                'prod_id' => 'RGAN01',
                'quantity' => 50,
                'item_price' => '4.49',
            ),
            10 => 
            array (
                'order_num' => 20008,
                'order_item' => 1,
                'prod_id' => 'RGAN01',
                'quantity' => 5,
                'item_price' => '4.99',
            ),
            11 => 
            array (
                'order_num' => 20008,
                'order_item' => 2,
                'prod_id' => 'BR03',
                'quantity' => 5,
                'item_price' => '11.99',
            ),
            12 => 
            array (
                'order_num' => 20008,
                'order_item' => 3,
                'prod_id' => 'BNBG01',
                'quantity' => 10,
                'item_price' => '3.49',
            ),
            13 => 
            array (
                'order_num' => 20008,
                'order_item' => 4,
                'prod_id' => 'BNBG02',
                'quantity' => 10,
                'item_price' => '3.49',
            ),
            14 => 
            array (
                'order_num' => 20008,
                'order_item' => 5,
                'prod_id' => 'BNBG03',
                'quantity' => 10,
                'item_price' => '3.49',
            ),
            15 => 
            array (
                'order_num' => 20009,
                'order_item' => 1,
                'prod_id' => 'BNBG01',
                'quantity' => 250,
                'item_price' => '2.49',
            ),
            16 => 
            array (
                'order_num' => 20009,
                'order_item' => 2,
                'prod_id' => 'BNBG02',
                'quantity' => 250,
                'item_price' => '2.49',
            ),
            17 => 
            array (
                'order_num' => 20009,
                'order_item' => 3,
                'prod_id' => 'BNBG03',
                'quantity' => 250,
                'item_price' => '2.49',
            ),
        ));
        
        
    }
}