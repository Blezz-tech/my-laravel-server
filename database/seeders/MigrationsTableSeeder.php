<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 48,
                'migration' => '2024_03_12_102603_create_countries_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 49,
                'migration' => '2024_03_12_102608_create_cities_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 64,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 2,
            ),
            3 => 
            array (
                'id' => 65,
                'migration' => '2014_10_12_100000_create_password_reset_tokens_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 66,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 67,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 2,
            ),
            6 => 
            array (
                'id' => 68,
                'migration' => '2023_12_15_090141_create_goods_table',
                'batch' => 2,
            ),
            7 => 
            array (
                'id' => 69,
                'migration' => '2024_01_16_103637_create_photos_table',
                'batch' => 2,
            ),
            8 => 
            array (
                'id' => 70,
                'migration' => '2024_03_12_092003_create_posts_table',
                'batch' => 2,
            ),
            9 => 
            array (
                'id' => 71,
                'migration' => '2024_03_12_104117_create_catalog_photo_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 72,
                'migration' => '2024_03_12_104117_create_cities_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 73,
                'migration' => '2024_03_12_104117_create_city_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 74,
                'migration' => '2024_03_12_104117_create_countries_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 75,
                'migration' => '2024_03_12_104117_create_country_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 76,
                'migration' => '2024_03_12_104117_create_countrylanguage_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 77,
                'migration' => '2024_03_12_104117_create_failed_jobs_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 78,
                'migration' => '2024_03_12_104117_create_goods_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 79,
                'migration' => '2024_03_12_104117_create_password_reset_tokens_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 80,
                'migration' => '2024_03_12_104117_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 81,
                'migration' => '2024_03_12_104117_create_photos_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 82,
                'migration' => '2024_03_12_104117_create_posts_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 83,
                'migration' => '2024_03_12_104117_create_users_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 84,
                'migration' => '2024_03_12_104120_add_foreign_keys_to_city_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 85,
                'migration' => '2024_03_12_104120_add_foreign_keys_to_countrylanguage_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}