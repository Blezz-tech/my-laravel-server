<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrylanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countrylanguage')->delete();
        
        \DB::table('countrylanguage')->insert(array (
            0 => 
            array (
                'CountryCode' => 'ABW',
                'Language' => 'Dutch',
                'IsOfficial' => 'T',
                'Percentage' => '5.3',
            ),
            1 => 
            array (
                'CountryCode' => 'ABW',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '9.5',
            ),
            2 => 
            array (
                'CountryCode' => 'ABW',
                'Language' => 'Papiamento',
                'IsOfficial' => 'F',
                'Percentage' => '76.7',
            ),
            3 => 
            array (
                'CountryCode' => 'ABW',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '7.4',
            ),
            4 => 
            array (
                'CountryCode' => 'AFG',
                'Language' => 'Balochi',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            5 => 
            array (
                'CountryCode' => 'AFG',
                'Language' => 'Dari',
                'IsOfficial' => 'T',
                'Percentage' => '32.1',
            ),
            6 => 
            array (
                'CountryCode' => 'AFG',
                'Language' => 'Pashto',
                'IsOfficial' => 'T',
                'Percentage' => '52.4',
            ),
            7 => 
            array (
                'CountryCode' => 'AFG',
                'Language' => 'Turkmenian',
                'IsOfficial' => 'F',
                'Percentage' => '1.9',
            ),
            8 => 
            array (
                'CountryCode' => 'AFG',
                'Language' => 'Uzbek',
                'IsOfficial' => 'F',
                'Percentage' => '8.8',
            ),
            9 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Ambo',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            10 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Chokwe',
                'IsOfficial' => 'F',
                'Percentage' => '4.2',
            ),
            11 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Kongo',
                'IsOfficial' => 'F',
                'Percentage' => '13.2',
            ),
            12 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Luchazi',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            13 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Luimbe-nganguela',
                'IsOfficial' => 'F',
                'Percentage' => '5.4',
            ),
            14 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Luvale',
                'IsOfficial' => 'F',
                'Percentage' => '3.6',
            ),
            15 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Mbundu',
                'IsOfficial' => 'F',
                'Percentage' => '21.6',
            ),
            16 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Nyaneka-nkhumbi',
                'IsOfficial' => 'F',
                'Percentage' => '5.4',
            ),
            17 => 
            array (
                'CountryCode' => 'AGO',
                'Language' => 'Ovimbundu',
                'IsOfficial' => 'F',
                'Percentage' => '37.2',
            ),
            18 => 
            array (
                'CountryCode' => 'AIA',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            19 => 
            array (
                'CountryCode' => 'ALB',
                'Language' => 'Albaniana',
                'IsOfficial' => 'T',
                'Percentage' => '97.9',
            ),
            20 => 
            array (
                'CountryCode' => 'ALB',
                'Language' => 'Greek',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            21 => 
            array (
                'CountryCode' => 'ALB',
                'Language' => 'Macedonian',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            22 => 
            array (
                'CountryCode' => 'AND',
                'Language' => 'Catalan',
                'IsOfficial' => 'T',
                'Percentage' => '32.3',
            ),
            23 => 
            array (
                'CountryCode' => 'AND',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '6.2',
            ),
            24 => 
            array (
                'CountryCode' => 'AND',
                'Language' => 'Portuguese',
                'IsOfficial' => 'F',
                'Percentage' => '10.8',
            ),
            25 => 
            array (
                'CountryCode' => 'AND',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '44.6',
            ),
            26 => 
            array (
                'CountryCode' => 'ANT',
                'Language' => 'Dutch',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            27 => 
            array (
                'CountryCode' => 'ANT',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '7.8',
            ),
            28 => 
            array (
                'CountryCode' => 'ANT',
                'Language' => 'Papiamento',
                'IsOfficial' => 'T',
                'Percentage' => '86.2',
            ),
            29 => 
            array (
                'CountryCode' => 'ARE',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '42.0',
            ),
            30 => 
            array (
                'CountryCode' => 'ARE',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            31 => 
            array (
                'CountryCode' => 'ARG',
                'Language' => 'Indian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            32 => 
            array (
                'CountryCode' => 'ARG',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            33 => 
            array (
                'CountryCode' => 'ARG',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '96.8',
            ),
            34 => 
            array (
                'CountryCode' => 'ARM',
                'Language' => 'Armenian',
                'IsOfficial' => 'T',
                'Percentage' => '93.4',
            ),
            35 => 
            array (
                'CountryCode' => 'ARM',
                'Language' => 'Azerbaijani',
                'IsOfficial' => 'F',
                'Percentage' => '2.6',
            ),
            36 => 
            array (
                'CountryCode' => 'ASM',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '3.1',
            ),
            37 => 
            array (
                'CountryCode' => 'ASM',
                'Language' => 'Samoan',
                'IsOfficial' => 'T',
                'Percentage' => '90.6',
            ),
            38 => 
            array (
                'CountryCode' => 'ASM',
                'Language' => 'Tongan',
                'IsOfficial' => 'F',
                'Percentage' => '3.1',
            ),
            39 => 
            array (
                'CountryCode' => 'ATG',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '95.7',
            ),
            40 => 
            array (
                'CountryCode' => 'ATG',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            41 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '1.0',
            ),
            42 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'Canton Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            43 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '81.2',
            ),
            44 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            45 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'Greek',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            46 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            47 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            48 => 
            array (
                'CountryCode' => 'AUS',
                'Language' => 'Vietnamese',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            49 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Czech',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            50 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'German',
                'IsOfficial' => 'T',
                'Percentage' => '92.0',
            ),
            51 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            52 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            53 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Romanian',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            54 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            55 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Slovene',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            56 => 
            array (
                'CountryCode' => 'AUT',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '1.5',
            ),
            57 => 
            array (
                'CountryCode' => 'AZE',
                'Language' => 'Armenian',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            58 => 
            array (
                'CountryCode' => 'AZE',
                'Language' => 'Azerbaijani',
                'IsOfficial' => 'T',
                'Percentage' => '89.0',
            ),
            59 => 
            array (
                'CountryCode' => 'AZE',
                'Language' => 'Lezgian',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            60 => 
            array (
                'CountryCode' => 'AZE',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '3.0',
            ),
            61 => 
            array (
                'CountryCode' => 'BDI',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            62 => 
            array (
                'CountryCode' => 'BDI',
                'Language' => 'Kirundi',
                'IsOfficial' => 'T',
                'Percentage' => '98.1',
            ),
            63 => 
            array (
                'CountryCode' => 'BDI',
                'Language' => 'Swahili',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            64 => 
            array (
                'CountryCode' => 'BEL',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            65 => 
            array (
                'CountryCode' => 'BEL',
                'Language' => 'Dutch',
                'IsOfficial' => 'T',
                'Percentage' => '59.2',
            ),
            66 => 
            array (
                'CountryCode' => 'BEL',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '32.6',
            ),
            67 => 
            array (
                'CountryCode' => 'BEL',
                'Language' => 'German',
                'IsOfficial' => 'T',
                'Percentage' => '1.0',
            ),
            68 => 
            array (
                'CountryCode' => 'BEL',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            69 => 
            array (
                'CountryCode' => 'BEL',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            70 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Adja',
                'IsOfficial' => 'F',
                'Percentage' => '11.1',
            ),
            71 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Aizo',
                'IsOfficial' => 'F',
                'Percentage' => '8.7',
            ),
            72 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Bariba',
                'IsOfficial' => 'F',
                'Percentage' => '8.7',
            ),
            73 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Fon',
                'IsOfficial' => 'F',
                'Percentage' => '39.8',
            ),
            74 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '5.6',
            ),
            75 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Joruba',
                'IsOfficial' => 'F',
                'Percentage' => '12.2',
            ),
            76 => 
            array (
                'CountryCode' => 'BEN',
                'Language' => 'Somba',
                'IsOfficial' => 'F',
                'Percentage' => '6.7',
            ),
            77 => 
            array (
                'CountryCode' => 'BFA',
                'Language' => 'Busansi',
                'IsOfficial' => 'F',
                'Percentage' => '3.5',
            ),
            78 => 
            array (
                'CountryCode' => 'BFA',
                'Language' => 'Dagara',
                'IsOfficial' => 'F',
                'Percentage' => '3.1',
            ),
            79 => 
            array (
                'CountryCode' => 'BFA',
                'Language' => 'Dyula',
                'IsOfficial' => 'F',
                'Percentage' => '2.6',
            ),
            80 => 
            array (
                'CountryCode' => 'BFA',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '9.7',
            ),
            81 => 
            array (
                'CountryCode' => 'BFA',
                'Language' => 'Gurma',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            82 => 
            array (
                'CountryCode' => 'BFA',
                'Language' => 'Mossi',
                'IsOfficial' => 'F',
                'Percentage' => '50.2',
            ),
            83 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Bengali',
                'IsOfficial' => 'T',
                'Percentage' => '97.7',
            ),
            84 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Chakma',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            85 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Garo',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            86 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Khasi',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            87 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Marma',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            88 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Santhali',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            89 => 
            array (
                'CountryCode' => 'BGD',
                'Language' => 'Tripuri',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            90 => 
            array (
                'CountryCode' => 'BGR',
                'Language' => 'Bulgariana',
                'IsOfficial' => 'T',
                'Percentage' => '83.2',
            ),
            91 => 
            array (
                'CountryCode' => 'BGR',
                'Language' => 'Macedonian',
                'IsOfficial' => 'F',
                'Percentage' => '2.6',
            ),
            92 => 
            array (
                'CountryCode' => 'BGR',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '3.7',
            ),
            93 => 
            array (
                'CountryCode' => 'BGR',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '9.4',
            ),
            94 => 
            array (
                'CountryCode' => 'BHR',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '67.7',
            ),
            95 => 
            array (
                'CountryCode' => 'BHR',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            96 => 
            array (
                'CountryCode' => 'BHS',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '89.7',
            ),
            97 => 
            array (
                'CountryCode' => 'BHS',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '10.3',
            ),
            98 => 
            array (
                'CountryCode' => 'BIH',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'T',
                'Percentage' => '99.2',
            ),
            99 => 
            array (
                'CountryCode' => 'BLR',
                'Language' => 'Belorussian',
                'IsOfficial' => 'T',
                'Percentage' => '65.6',
            ),
            100 => 
            array (
                'CountryCode' => 'BLR',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            101 => 
            array (
                'CountryCode' => 'BLR',
                'Language' => 'Russian',
                'IsOfficial' => 'T',
                'Percentage' => '32.0',
            ),
            102 => 
            array (
                'CountryCode' => 'BLR',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            103 => 
            array (
                'CountryCode' => 'BLZ',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '50.8',
            ),
            104 => 
            array (
                'CountryCode' => 'BLZ',
                'Language' => 'Garifuna',
                'IsOfficial' => 'F',
                'Percentage' => '6.8',
            ),
            105 => 
            array (
                'CountryCode' => 'BLZ',
                'Language' => 'Maya Languages',
                'IsOfficial' => 'F',
                'Percentage' => '9.6',
            ),
            106 => 
            array (
                'CountryCode' => 'BLZ',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '31.6',
            ),
            107 => 
            array (
                'CountryCode' => 'BMU',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            108 => 
            array (
                'CountryCode' => 'BOL',
                'Language' => 'Aimará',
                'IsOfficial' => 'T',
                'Percentage' => '3.2',
            ),
            109 => 
            array (
                'CountryCode' => 'BOL',
                'Language' => 'Guaraní',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            110 => 
            array (
                'CountryCode' => 'BOL',
                'Language' => 'Ketšua',
                'IsOfficial' => 'T',
                'Percentage' => '8.1',
            ),
            111 => 
            array (
                'CountryCode' => 'BOL',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '87.7',
            ),
            112 => 
            array (
                'CountryCode' => 'BRA',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            113 => 
            array (
                'CountryCode' => 'BRA',
                'Language' => 'Indian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            114 => 
            array (
                'CountryCode' => 'BRA',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            115 => 
            array (
                'CountryCode' => 'BRA',
                'Language' => 'Japanese',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            116 => 
            array (
                'CountryCode' => 'BRA',
                'Language' => 'Portuguese',
                'IsOfficial' => 'T',
                'Percentage' => '97.5',
            ),
            117 => 
            array (
                'CountryCode' => 'BRB',
                'Language' => 'Bajan',
                'IsOfficial' => 'F',
                'Percentage' => '95.1',
            ),
            118 => 
            array (
                'CountryCode' => 'BRB',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            119 => 
            array (
                'CountryCode' => 'BRN',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '9.3',
            ),
            120 => 
            array (
                'CountryCode' => 'BRN',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '3.1',
            ),
            121 => 
            array (
                'CountryCode' => 'BRN',
                'Language' => 'Malay',
                'IsOfficial' => 'T',
                'Percentage' => '45.5',
            ),
            122 => 
            array (
                'CountryCode' => 'BRN',
                'Language' => 'Malay-English',
                'IsOfficial' => 'F',
                'Percentage' => '28.8',
            ),
            123 => 
            array (
                'CountryCode' => 'BTN',
                'Language' => 'Asami',
                'IsOfficial' => 'F',
                'Percentage' => '15.2',
            ),
            124 => 
            array (
                'CountryCode' => 'BTN',
                'Language' => 'Dzongkha',
                'IsOfficial' => 'T',
                'Percentage' => '50.0',
            ),
            125 => 
            array (
                'CountryCode' => 'BTN',
                'Language' => 'Nepali',
                'IsOfficial' => 'F',
                'Percentage' => '34.8',
            ),
            126 => 
            array (
                'CountryCode' => 'BWA',
                'Language' => 'Khoekhoe',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            127 => 
            array (
                'CountryCode' => 'BWA',
                'Language' => 'Ndebele',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            128 => 
            array (
                'CountryCode' => 'BWA',
                'Language' => 'San',
                'IsOfficial' => 'F',
                'Percentage' => '3.5',
            ),
            129 => 
            array (
                'CountryCode' => 'BWA',
                'Language' => 'Shona',
                'IsOfficial' => 'F',
                'Percentage' => '12.3',
            ),
            130 => 
            array (
                'CountryCode' => 'BWA',
                'Language' => 'Tswana',
                'IsOfficial' => 'F',
                'Percentage' => '75.5',
            ),
            131 => 
            array (
                'CountryCode' => 'CAF',
                'Language' => 'Banda',
                'IsOfficial' => 'F',
                'Percentage' => '23.5',
            ),
            132 => 
            array (
                'CountryCode' => 'CAF',
                'Language' => 'Gbaya',
                'IsOfficial' => 'F',
                'Percentage' => '23.8',
            ),
            133 => 
            array (
                'CountryCode' => 'CAF',
                'Language' => 'Mandjia',
                'IsOfficial' => 'F',
                'Percentage' => '14.8',
            ),
            134 => 
            array (
                'CountryCode' => 'CAF',
                'Language' => 'Mbum',
                'IsOfficial' => 'F',
                'Percentage' => '6.4',
            ),
            135 => 
            array (
                'CountryCode' => 'CAF',
                'Language' => 'Ngbaka',
                'IsOfficial' => 'F',
                'Percentage' => '7.5',
            ),
            136 => 
            array (
                'CountryCode' => 'CAF',
                'Language' => 'Sara',
                'IsOfficial' => 'F',
                'Percentage' => '6.4',
            ),
            137 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            138 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Dutch',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            139 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '60.4',
            ),
            140 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Eskimo Languages',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            141 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '23.4',
            ),
            142 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            143 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            144 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            145 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Portuguese',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            146 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Punjabi',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            147 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            148 => 
            array (
                'CountryCode' => 'CAN',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            149 => 
            array (
                'CountryCode' => 'CCK',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            150 => 
            array (
                'CountryCode' => 'CCK',
                'Language' => 'Malay',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            151 => 
            array (
                'CountryCode' => 'CHE',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '19.2',
            ),
            152 => 
            array (
                'CountryCode' => 'CHE',
                'Language' => 'German',
                'IsOfficial' => 'T',
                'Percentage' => '63.6',
            ),
            153 => 
            array (
                'CountryCode' => 'CHE',
                'Language' => 'Italian',
                'IsOfficial' => 'T',
                'Percentage' => '7.7',
            ),
            154 => 
            array (
                'CountryCode' => 'CHE',
                'Language' => 'Romansh',
                'IsOfficial' => 'T',
                'Percentage' => '0.6',
            ),
            155 => 
            array (
                'CountryCode' => 'CHL',
                'Language' => 'Aimará',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            156 => 
            array (
                'CountryCode' => 'CHL',
                'Language' => 'Araucan',
                'IsOfficial' => 'F',
                'Percentage' => '9.6',
            ),
            157 => 
            array (
                'CountryCode' => 'CHL',
                'Language' => 'Rapa nui',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            158 => 
            array (
                'CountryCode' => 'CHL',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '89.7',
            ),
            159 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Chinese',
                'IsOfficial' => 'T',
                'Percentage' => '92.0',
            ),
            160 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Dong',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            161 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Hui',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            162 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Mantšu',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            163 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Miao',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            164 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Mongolian',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            165 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Puyi',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            166 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Tibetan',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            167 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Tujia',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            168 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Uighur',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            169 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Yi',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            170 => 
            array (
                'CountryCode' => 'CHN',
                'Language' => 'Zhuang',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            171 => 
            array (
                'CountryCode' => 'CIV',
                'Language' => 'Akan',
                'IsOfficial' => 'F',
                'Percentage' => '30.0',
            ),
            172 => 
            array (
                'CountryCode' => 'CIV',
                'Language' => 'Gur',
                'IsOfficial' => 'F',
                'Percentage' => '11.7',
            ),
            173 => 
            array (
                'CountryCode' => 'CIV',
                'Language' => 'Kru',
                'IsOfficial' => 'F',
                'Percentage' => '10.5',
            ),
            174 => 
            array (
                'CountryCode' => 'CIV',
                'Language' => 'Malinke',
                'IsOfficial' => 'F',
                'Percentage' => '11.4',
            ),
            175 => 
            array (
                'CountryCode' => 'CIV',
                'Language' => '[South]Mande',
                'IsOfficial' => 'F',
                'Percentage' => '7.7',
            ),
            176 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Bamileke-bamum',
                'IsOfficial' => 'F',
                'Percentage' => '18.6',
            ),
            177 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Duala',
                'IsOfficial' => 'F',
                'Percentage' => '10.9',
            ),
            178 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Fang',
                'IsOfficial' => 'F',
                'Percentage' => '19.7',
            ),
            179 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '9.6',
            ),
            180 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Maka',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            181 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Mandara',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            182 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Masana',
                'IsOfficial' => 'F',
                'Percentage' => '3.9',
            ),
            183 => 
            array (
                'CountryCode' => 'CMR',
                'Language' => 'Tikar',
                'IsOfficial' => 'F',
                'Percentage' => '7.4',
            ),
            184 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Boa',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            185 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Chokwe',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            186 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Kongo',
                'IsOfficial' => 'F',
                'Percentage' => '16.0',
            ),
            187 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Luba',
                'IsOfficial' => 'F',
                'Percentage' => '18.0',
            ),
            188 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Mongo',
                'IsOfficial' => 'F',
                'Percentage' => '13.5',
            ),
            189 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Ngala and Bangi',
                'IsOfficial' => 'F',
                'Percentage' => '5.8',
            ),
            190 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Rundi',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            191 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Rwanda',
                'IsOfficial' => 'F',
                'Percentage' => '10.3',
            ),
            192 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Teke',
                'IsOfficial' => 'F',
                'Percentage' => '2.7',
            ),
            193 => 
            array (
                'CountryCode' => 'COD',
                'Language' => 'Zande',
                'IsOfficial' => 'F',
                'Percentage' => '6.1',
            ),
            194 => 
            array (
                'CountryCode' => 'COG',
                'Language' => 'Kongo',
                'IsOfficial' => 'F',
                'Percentage' => '51.5',
            ),
            195 => 
            array (
                'CountryCode' => 'COG',
                'Language' => 'Mbete',
                'IsOfficial' => 'F',
                'Percentage' => '4.8',
            ),
            196 => 
            array (
                'CountryCode' => 'COG',
                'Language' => 'Mboshi',
                'IsOfficial' => 'F',
                'Percentage' => '11.4',
            ),
            197 => 
            array (
                'CountryCode' => 'COG',
                'Language' => 'Punu',
                'IsOfficial' => 'F',
                'Percentage' => '2.9',
            ),
            198 => 
            array (
                'CountryCode' => 'COG',
                'Language' => 'Sango',
                'IsOfficial' => 'F',
                'Percentage' => '2.6',
            ),
            199 => 
            array (
                'CountryCode' => 'COG',
                'Language' => 'Teke',
                'IsOfficial' => 'F',
                'Percentage' => '17.3',
            ),
            200 => 
            array (
                'CountryCode' => 'COK',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            201 => 
            array (
                'CountryCode' => 'COK',
                'Language' => 'Maori',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            202 => 
            array (
                'CountryCode' => 'COL',
                'Language' => 'Arawakan',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            203 => 
            array (
                'CountryCode' => 'COL',
                'Language' => 'Caribbean',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            204 => 
            array (
                'CountryCode' => 'COL',
                'Language' => 'Chibcha',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            205 => 
            array (
                'CountryCode' => 'COL',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            206 => 
            array (
                'CountryCode' => 'COL',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '99.0',
            ),
            207 => 
            array (
                'CountryCode' => 'COM',
                'Language' => 'Comorian',
                'IsOfficial' => 'T',
                'Percentage' => '75.0',
            ),
            208 => 
            array (
                'CountryCode' => 'COM',
                'Language' => 'Comorian-Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            209 => 
            array (
                'CountryCode' => 'COM',
                'Language' => 'Comorian-French',
                'IsOfficial' => 'F',
                'Percentage' => '12.9',
            ),
            210 => 
            array (
                'CountryCode' => 'COM',
                'Language' => 'Comorian-madagassi',
                'IsOfficial' => 'F',
                'Percentage' => '5.5',
            ),
            211 => 
            array (
                'CountryCode' => 'COM',
                'Language' => 'Comorian-Swahili',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            212 => 
            array (
                'CountryCode' => 'CPV',
                'Language' => 'Crioulo',
                'IsOfficial' => 'F',
                'Percentage' => '100.0',
            ),
            213 => 
            array (
                'CountryCode' => 'CPV',
                'Language' => 'Portuguese',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            214 => 
            array (
                'CountryCode' => 'CRI',
                'Language' => 'Chibcha',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            215 => 
            array (
                'CountryCode' => 'CRI',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            216 => 
            array (
                'CountryCode' => 'CRI',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            217 => 
            array (
                'CountryCode' => 'CRI',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '97.5',
            ),
            218 => 
            array (
                'CountryCode' => 'CUB',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            219 => 
            array (
                'CountryCode' => 'CXR',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            220 => 
            array (
                'CountryCode' => 'CXR',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            221 => 
            array (
                'CountryCode' => 'CYM',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            222 => 
            array (
                'CountryCode' => 'CYP',
                'Language' => 'Greek',
                'IsOfficial' => 'T',
                'Percentage' => '74.1',
            ),
            223 => 
            array (
                'CountryCode' => 'CYP',
                'Language' => 'Turkish',
                'IsOfficial' => 'T',
                'Percentage' => '22.4',
            ),
            224 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Czech',
                'IsOfficial' => 'T',
                'Percentage' => '81.2',
            ),
            225 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            226 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            227 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Moravian',
                'IsOfficial' => 'F',
                'Percentage' => '12.9',
            ),
            228 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            229 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            230 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Silesiana',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            231 => 
            array (
                'CountryCode' => 'CZE',
                'Language' => 'Slovak',
                'IsOfficial' => 'F',
                'Percentage' => '3.1',
            ),
            232 => 
            array (
                'CountryCode' => 'DEU',
                'Language' => 'German',
                'IsOfficial' => 'T',
                'Percentage' => '91.3',
            ),
            233 => 
            array (
                'CountryCode' => 'DEU',
                'Language' => 'Greek',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            234 => 
            array (
                'CountryCode' => 'DEU',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            235 => 
            array (
                'CountryCode' => 'DEU',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            236 => 
            array (
                'CountryCode' => 'DEU',
                'Language' => 'Southern Slavic Languages',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            237 => 
            array (
                'CountryCode' => 'DEU',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '2.6',
            ),
            238 => 
            array (
                'CountryCode' => 'DJI',
                'Language' => 'Afar',
                'IsOfficial' => 'F',
                'Percentage' => '34.8',
            ),
            239 => 
            array (
                'CountryCode' => 'DJI',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '10.6',
            ),
            240 => 
            array (
                'CountryCode' => 'DJI',
                'Language' => 'Somali',
                'IsOfficial' => 'F',
                'Percentage' => '43.9',
            ),
            241 => 
            array (
                'CountryCode' => 'DMA',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '100.0',
            ),
            242 => 
            array (
                'CountryCode' => 'DMA',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            243 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            244 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'Danish',
                'IsOfficial' => 'T',
                'Percentage' => '93.5',
            ),
            245 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            246 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            247 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'Norwegian',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            248 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'Swedish',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            249 => 
            array (
                'CountryCode' => 'DNK',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            250 => 
            array (
                'CountryCode' => 'DOM',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            251 => 
            array (
                'CountryCode' => 'DOM',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '98.0',
            ),
            252 => 
            array (
                'CountryCode' => 'DZA',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '86.0',
            ),
            253 => 
            array (
                'CountryCode' => 'DZA',
                'Language' => 'Berberi',
                'IsOfficial' => 'F',
                'Percentage' => '14.0',
            ),
            254 => 
            array (
                'CountryCode' => 'ECU',
                'Language' => 'Ketšua',
                'IsOfficial' => 'F',
                'Percentage' => '7.0',
            ),
            255 => 
            array (
                'CountryCode' => 'ECU',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '93.0',
            ),
            256 => 
            array (
                'CountryCode' => 'EGY',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '98.8',
            ),
            257 => 
            array (
                'CountryCode' => 'EGY',
                'Language' => 'Sinaberberi',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            258 => 
            array (
                'CountryCode' => 'ERI',
                'Language' => 'Afar',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            259 => 
            array (
                'CountryCode' => 'ERI',
                'Language' => 'Bilin',
                'IsOfficial' => 'F',
                'Percentage' => '3.0',
            ),
            260 => 
            array (
                'CountryCode' => 'ERI',
                'Language' => 'Hadareb',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            261 => 
            array (
                'CountryCode' => 'ERI',
                'Language' => 'Saho',
                'IsOfficial' => 'F',
                'Percentage' => '3.0',
            ),
            262 => 
            array (
                'CountryCode' => 'ERI',
                'Language' => 'Tigre',
                'IsOfficial' => 'F',
                'Percentage' => '31.7',
            ),
            263 => 
            array (
                'CountryCode' => 'ERI',
                'Language' => 'Tigrinja',
                'IsOfficial' => 'T',
                'Percentage' => '49.1',
            ),
            264 => 
            array (
                'CountryCode' => 'ESH',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            265 => 
            array (
                'CountryCode' => 'ESP',
                'Language' => 'Basque',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            266 => 
            array (
                'CountryCode' => 'ESP',
                'Language' => 'Catalan',
                'IsOfficial' => 'F',
                'Percentage' => '16.9',
            ),
            267 => 
            array (
                'CountryCode' => 'ESP',
                'Language' => 'Galecian',
                'IsOfficial' => 'F',
                'Percentage' => '6.4',
            ),
            268 => 
            array (
                'CountryCode' => 'ESP',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '74.4',
            ),
            269 => 
            array (
                'CountryCode' => 'EST',
                'Language' => 'Belorussian',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            270 => 
            array (
                'CountryCode' => 'EST',
                'Language' => 'Estonian',
                'IsOfficial' => 'T',
                'Percentage' => '65.3',
            ),
            271 => 
            array (
                'CountryCode' => 'EST',
                'Language' => 'Finnish',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            272 => 
            array (
                'CountryCode' => 'EST',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '27.8',
            ),
            273 => 
            array (
                'CountryCode' => 'EST',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '2.8',
            ),
            274 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Amhara',
                'IsOfficial' => 'F',
                'Percentage' => '30.0',
            ),
            275 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Gurage',
                'IsOfficial' => 'F',
                'Percentage' => '4.7',
            ),
            276 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Oromo',
                'IsOfficial' => 'F',
                'Percentage' => '31.0',
            ),
            277 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Sidamo',
                'IsOfficial' => 'F',
                'Percentage' => '3.2',
            ),
            278 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Somali',
                'IsOfficial' => 'F',
                'Percentage' => '4.1',
            ),
            279 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Tigrinja',
                'IsOfficial' => 'F',
                'Percentage' => '7.2',
            ),
            280 => 
            array (
                'CountryCode' => 'ETH',
                'Language' => 'Walaita',
                'IsOfficial' => 'F',
                'Percentage' => '2.8',
            ),
            281 => 
            array (
                'CountryCode' => 'FIN',
                'Language' => 'Estonian',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            282 => 
            array (
                'CountryCode' => 'FIN',
                'Language' => 'Finnish',
                'IsOfficial' => 'T',
                'Percentage' => '92.7',
            ),
            283 => 
            array (
                'CountryCode' => 'FIN',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            284 => 
            array (
                'CountryCode' => 'FIN',
                'Language' => 'Saame',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            285 => 
            array (
                'CountryCode' => 'FIN',
                'Language' => 'Swedish',
                'IsOfficial' => 'T',
                'Percentage' => '5.7',
            ),
            286 => 
            array (
                'CountryCode' => 'FJI',
                'Language' => 'Fijian',
                'IsOfficial' => 'T',
                'Percentage' => '50.8',
            ),
            287 => 
            array (
                'CountryCode' => 'FJI',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '43.7',
            ),
            288 => 
            array (
                'CountryCode' => 'FLK',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            289 => 
            array (
                'CountryCode' => 'FRA',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            290 => 
            array (
                'CountryCode' => 'FRA',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '93.6',
            ),
            291 => 
            array (
                'CountryCode' => 'FRA',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            292 => 
            array (
                'CountryCode' => 'FRA',
                'Language' => 'Portuguese',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            293 => 
            array (
                'CountryCode' => 'FRA',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            294 => 
            array (
                'CountryCode' => 'FRA',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            295 => 
            array (
                'CountryCode' => 'FRO',
                'Language' => 'Danish',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            296 => 
            array (
                'CountryCode' => 'FRO',
                'Language' => 'Faroese',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            297 => 
            array (
                'CountryCode' => 'FSM',
                'Language' => 'Kosrean',
                'IsOfficial' => 'F',
                'Percentage' => '7.3',
            ),
            298 => 
            array (
                'CountryCode' => 'FSM',
                'Language' => 'Mortlock',
                'IsOfficial' => 'F',
                'Percentage' => '7.6',
            ),
            299 => 
            array (
                'CountryCode' => 'FSM',
                'Language' => 'Pohnpei',
                'IsOfficial' => 'F',
                'Percentage' => '23.8',
            ),
            300 => 
            array (
                'CountryCode' => 'FSM',
                'Language' => 'Trukese',
                'IsOfficial' => 'F',
                'Percentage' => '41.6',
            ),
            301 => 
            array (
                'CountryCode' => 'FSM',
                'Language' => 'Wolea',
                'IsOfficial' => 'F',
                'Percentage' => '3.7',
            ),
            302 => 
            array (
                'CountryCode' => 'FSM',
                'Language' => 'Yap',
                'IsOfficial' => 'F',
                'Percentage' => '5.8',
            ),
            303 => 
            array (
                'CountryCode' => 'GAB',
                'Language' => 'Fang',
                'IsOfficial' => 'F',
                'Percentage' => '35.8',
            ),
            304 => 
            array (
                'CountryCode' => 'GAB',
                'Language' => 'Mbete',
                'IsOfficial' => 'F',
                'Percentage' => '13.8',
            ),
            305 => 
            array (
                'CountryCode' => 'GAB',
                'Language' => 'Mpongwe',
                'IsOfficial' => 'F',
                'Percentage' => '14.6',
            ),
            306 => 
            array (
                'CountryCode' => 'GAB',
                'Language' => 'Punu-sira-nzebi',
                'IsOfficial' => 'F',
                'Percentage' => '17.1',
            ),
            307 => 
            array (
                'CountryCode' => 'GBR',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '97.3',
            ),
            308 => 
            array (
                'CountryCode' => 'GBR',
                'Language' => 'Gaeli',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            309 => 
            array (
                'CountryCode' => 'GBR',
                'Language' => 'Kymri',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            310 => 
            array (
                'CountryCode' => 'GEO',
                'Language' => 'Abhyasi',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            311 => 
            array (
                'CountryCode' => 'GEO',
                'Language' => 'Armenian',
                'IsOfficial' => 'F',
                'Percentage' => '6.8',
            ),
            312 => 
            array (
                'CountryCode' => 'GEO',
                'Language' => 'Azerbaijani',
                'IsOfficial' => 'F',
                'Percentage' => '5.5',
            ),
            313 => 
            array (
                'CountryCode' => 'GEO',
                'Language' => 'Georgiana',
                'IsOfficial' => 'T',
                'Percentage' => '71.7',
            ),
            314 => 
            array (
                'CountryCode' => 'GEO',
                'Language' => 'Osseetti',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            315 => 
            array (
                'CountryCode' => 'GEO',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '8.8',
            ),
            316 => 
            array (
                'CountryCode' => 'GHA',
                'Language' => 'Akan',
                'IsOfficial' => 'F',
                'Percentage' => '52.4',
            ),
            317 => 
            array (
                'CountryCode' => 'GHA',
                'Language' => 'Ewe',
                'IsOfficial' => 'F',
                'Percentage' => '11.9',
            ),
            318 => 
            array (
                'CountryCode' => 'GHA',
                'Language' => 'Ga-adangme',
                'IsOfficial' => 'F',
                'Percentage' => '7.8',
            ),
            319 => 
            array (
                'CountryCode' => 'GHA',
                'Language' => 'Gurma',
                'IsOfficial' => 'F',
                'Percentage' => '3.3',
            ),
            320 => 
            array (
                'CountryCode' => 'GHA',
                'Language' => 'Joruba',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            321 => 
            array (
                'CountryCode' => 'GHA',
                'Language' => 'Mossi',
                'IsOfficial' => 'F',
                'Percentage' => '15.8',
            ),
            322 => 
            array (
                'CountryCode' => 'GIB',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '7.4',
            ),
            323 => 
            array (
                'CountryCode' => 'GIB',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '88.9',
            ),
            324 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '38.6',
            ),
            325 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Kissi',
                'IsOfficial' => 'F',
                'Percentage' => '6.0',
            ),
            326 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Kpelle',
                'IsOfficial' => 'F',
                'Percentage' => '4.6',
            ),
            327 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Loma',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            328 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Malinke',
                'IsOfficial' => 'F',
                'Percentage' => '23.2',
            ),
            329 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Susu',
                'IsOfficial' => 'F',
                'Percentage' => '11.0',
            ),
            330 => 
            array (
                'CountryCode' => 'GIN',
                'Language' => 'Yalunka',
                'IsOfficial' => 'F',
                'Percentage' => '2.9',
            ),
            331 => 
            array (
                'CountryCode' => 'GLP',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '95.0',
            ),
            332 => 
            array (
                'CountryCode' => 'GLP',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            333 => 
            array (
                'CountryCode' => 'GMB',
                'Language' => 'Diola',
                'IsOfficial' => 'F',
                'Percentage' => '9.2',
            ),
            334 => 
            array (
                'CountryCode' => 'GMB',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '16.2',
            ),
            335 => 
            array (
                'CountryCode' => 'GMB',
                'Language' => 'Malinke',
                'IsOfficial' => 'F',
                'Percentage' => '34.1',
            ),
            336 => 
            array (
                'CountryCode' => 'GMB',
                'Language' => 'Soninke',
                'IsOfficial' => 'F',
                'Percentage' => '7.6',
            ),
            337 => 
            array (
                'CountryCode' => 'GMB',
                'Language' => 'Wolof',
                'IsOfficial' => 'F',
                'Percentage' => '12.6',
            ),
            338 => 
            array (
                'CountryCode' => 'GNB',
                'Language' => 'Balante',
                'IsOfficial' => 'F',
                'Percentage' => '14.6',
            ),
            339 => 
            array (
                'CountryCode' => 'GNB',
                'Language' => 'Crioulo',
                'IsOfficial' => 'F',
                'Percentage' => '36.4',
            ),
            340 => 
            array (
                'CountryCode' => 'GNB',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '16.6',
            ),
            341 => 
            array (
                'CountryCode' => 'GNB',
                'Language' => 'Malinke',
                'IsOfficial' => 'F',
                'Percentage' => '6.9',
            ),
            342 => 
            array (
                'CountryCode' => 'GNB',
                'Language' => 'Mandyako',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            343 => 
            array (
                'CountryCode' => 'GNB',
                'Language' => 'Portuguese',
                'IsOfficial' => 'T',
                'Percentage' => '8.1',
            ),
            344 => 
            array (
                'CountryCode' => 'GNQ',
                'Language' => 'Bubi',
                'IsOfficial' => 'F',
                'Percentage' => '8.7',
            ),
            345 => 
            array (
                'CountryCode' => 'GNQ',
                'Language' => 'Fang',
                'IsOfficial' => 'F',
                'Percentage' => '84.8',
            ),
            346 => 
            array (
                'CountryCode' => 'GRC',
                'Language' => 'Greek',
                'IsOfficial' => 'T',
                'Percentage' => '98.5',
            ),
            347 => 
            array (
                'CountryCode' => 'GRC',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            348 => 
            array (
                'CountryCode' => 'GRD',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '100.0',
            ),
            349 => 
            array (
                'CountryCode' => 'GRL',
                'Language' => 'Danish',
                'IsOfficial' => 'T',
                'Percentage' => '12.5',
            ),
            350 => 
            array (
                'CountryCode' => 'GRL',
                'Language' => 'Greenlandic',
                'IsOfficial' => 'T',
                'Percentage' => '87.5',
            ),
            351 => 
            array (
                'CountryCode' => 'GTM',
                'Language' => 'Cakchiquel',
                'IsOfficial' => 'F',
                'Percentage' => '8.9',
            ),
            352 => 
            array (
                'CountryCode' => 'GTM',
                'Language' => 'Kekchí',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            353 => 
            array (
                'CountryCode' => 'GTM',
                'Language' => 'Mam',
                'IsOfficial' => 'F',
                'Percentage' => '2.7',
            ),
            354 => 
            array (
                'CountryCode' => 'GTM',
                'Language' => 'Quiché',
                'IsOfficial' => 'F',
                'Percentage' => '10.1',
            ),
            355 => 
            array (
                'CountryCode' => 'GTM',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '64.7',
            ),
            356 => 
            array (
                'CountryCode' => 'GUF',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '94.3',
            ),
            357 => 
            array (
                'CountryCode' => 'GUF',
                'Language' => 'Indian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '1.9',
            ),
            358 => 
            array (
                'CountryCode' => 'GUM',
                'Language' => 'Chamorro',
                'IsOfficial' => 'T',
                'Percentage' => '29.6',
            ),
            359 => 
            array (
                'CountryCode' => 'GUM',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '37.5',
            ),
            360 => 
            array (
                'CountryCode' => 'GUM',
                'Language' => 'Japanese',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            361 => 
            array (
                'CountryCode' => 'GUM',
                'Language' => 'Korean',
                'IsOfficial' => 'F',
                'Percentage' => '3.3',
            ),
            362 => 
            array (
                'CountryCode' => 'GUM',
                'Language' => 'Philippene Languages',
                'IsOfficial' => 'F',
                'Percentage' => '19.7',
            ),
            363 => 
            array (
                'CountryCode' => 'GUY',
                'Language' => 'Arawakan',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            364 => 
            array (
                'CountryCode' => 'GUY',
                'Language' => 'Caribbean',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            365 => 
            array (
                'CountryCode' => 'GUY',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '96.4',
            ),
            366 => 
            array (
                'CountryCode' => 'HKG',
                'Language' => 'Canton Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '88.7',
            ),
            367 => 
            array (
                'CountryCode' => 'HKG',
                'Language' => 'Chiu chau',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            368 => 
            array (
                'CountryCode' => 'HKG',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '2.2',
            ),
            369 => 
            array (
                'CountryCode' => 'HKG',
                'Language' => 'Fukien',
                'IsOfficial' => 'F',
                'Percentage' => '1.9',
            ),
            370 => 
            array (
                'CountryCode' => 'HKG',
                'Language' => 'Hakka',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            371 => 
            array (
                'CountryCode' => 'HND',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            372 => 
            array (
                'CountryCode' => 'HND',
                'Language' => 'Garifuna',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            373 => 
            array (
                'CountryCode' => 'HND',
                'Language' => 'Miskito',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            374 => 
            array (
                'CountryCode' => 'HND',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '97.2',
            ),
            375 => 
            array (
                'CountryCode' => 'HRV',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'T',
                'Percentage' => '95.9',
            ),
            376 => 
            array (
                'CountryCode' => 'HRV',
                'Language' => 'Slovene',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            377 => 
            array (
                'CountryCode' => 'HTI',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            378 => 
            array (
                'CountryCode' => 'HTI',
                'Language' => 'Haiti Creole',
                'IsOfficial' => 'F',
                'Percentage' => '100.0',
            ),
            379 => 
            array (
                'CountryCode' => 'HUN',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            380 => 
            array (
                'CountryCode' => 'HUN',
                'Language' => 'Hungarian',
                'IsOfficial' => 'T',
                'Percentage' => '98.5',
            ),
            381 => 
            array (
                'CountryCode' => 'HUN',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            382 => 
            array (
                'CountryCode' => 'HUN',
                'Language' => 'Romanian',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            383 => 
            array (
                'CountryCode' => 'HUN',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            384 => 
            array (
                'CountryCode' => 'HUN',
                'Language' => 'Slovak',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            385 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Bali',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            386 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Banja',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            387 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Batakki',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            388 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Bugi',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            389 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Javanese',
                'IsOfficial' => 'F',
                'Percentage' => '39.4',
            ),
            390 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Madura',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            391 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Malay',
                'IsOfficial' => 'T',
                'Percentage' => '12.1',
            ),
            392 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Minangkabau',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            393 => 
            array (
                'CountryCode' => 'IDN',
                'Language' => 'Sunda',
                'IsOfficial' => 'F',
                'Percentage' => '15.8',
            ),
            394 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Asami',
                'IsOfficial' => 'F',
                'Percentage' => '1.5',
            ),
            395 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Bengali',
                'IsOfficial' => 'F',
                'Percentage' => '8.2',
            ),
            396 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Gujarati',
                'IsOfficial' => 'F',
                'Percentage' => '4.8',
            ),
            397 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Hindi',
                'IsOfficial' => 'T',
                'Percentage' => '39.9',
            ),
            398 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Kannada',
                'IsOfficial' => 'F',
                'Percentage' => '3.9',
            ),
            399 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Malajalam',
                'IsOfficial' => 'F',
                'Percentage' => '3.6',
            ),
            400 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Marathi',
                'IsOfficial' => 'F',
                'Percentage' => '7.4',
            ),
            401 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Orija',
                'IsOfficial' => 'F',
                'Percentage' => '3.3',
            ),
            402 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Punjabi',
                'IsOfficial' => 'F',
                'Percentage' => '2.8',
            ),
            403 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Tamil',
                'IsOfficial' => 'F',
                'Percentage' => '6.3',
            ),
            404 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Telugu',
                'IsOfficial' => 'F',
                'Percentage' => '7.8',
            ),
            405 => 
            array (
                'CountryCode' => 'IND',
                'Language' => 'Urdu',
                'IsOfficial' => 'F',
                'Percentage' => '5.1',
            ),
            406 => 
            array (
                'CountryCode' => 'IRL',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '98.4',
            ),
            407 => 
            array (
                'CountryCode' => 'IRL',
                'Language' => 'Irish',
                'IsOfficial' => 'T',
                'Percentage' => '1.6',
            ),
            408 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            409 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Azerbaijani',
                'IsOfficial' => 'F',
                'Percentage' => '16.8',
            ),
            410 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Bakhtyari',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            411 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Balochi',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            412 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Gilaki',
                'IsOfficial' => 'F',
                'Percentage' => '5.3',
            ),
            413 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Kurdish',
                'IsOfficial' => 'F',
                'Percentage' => '9.1',
            ),
            414 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Luri',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            415 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Mazandarani',
                'IsOfficial' => 'F',
                'Percentage' => '3.6',
            ),
            416 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Persian',
                'IsOfficial' => 'T',
                'Percentage' => '45.7',
            ),
            417 => 
            array (
                'CountryCode' => 'IRN',
                'Language' => 'Turkmenian',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            418 => 
            array (
                'CountryCode' => 'IRQ',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '77.2',
            ),
            419 => 
            array (
                'CountryCode' => 'IRQ',
                'Language' => 'Assyrian',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            420 => 
            array (
                'CountryCode' => 'IRQ',
                'Language' => 'Azerbaijani',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            421 => 
            array (
                'CountryCode' => 'IRQ',
                'Language' => 'Kurdish',
                'IsOfficial' => 'F',
                'Percentage' => '19.0',
            ),
            422 => 
            array (
                'CountryCode' => 'IRQ',
                'Language' => 'Persian',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            423 => 
            array (
                'CountryCode' => 'ISL',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            424 => 
            array (
                'CountryCode' => 'ISL',
                'Language' => 'Icelandic',
                'IsOfficial' => 'T',
                'Percentage' => '95.7',
            ),
            425 => 
            array (
                'CountryCode' => 'ISR',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '18.0',
            ),
            426 => 
            array (
                'CountryCode' => 'ISR',
                'Language' => 'Hebrew',
                'IsOfficial' => 'T',
                'Percentage' => '63.1',
            ),
            427 => 
            array (
                'CountryCode' => 'ISR',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '8.9',
            ),
            428 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'Albaniana',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            429 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            430 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'Friuli',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            431 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            432 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'Italian',
                'IsOfficial' => 'T',
                'Percentage' => '94.1',
            ),
            433 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            434 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'Sardinian',
                'IsOfficial' => 'F',
                'Percentage' => '2.7',
            ),
            435 => 
            array (
                'CountryCode' => 'ITA',
                'Language' => 'Slovene',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            436 => 
            array (
                'CountryCode' => 'JAM',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '94.2',
            ),
            437 => 
            array (
                'CountryCode' => 'JAM',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '1.9',
            ),
            438 => 
            array (
                'CountryCode' => 'JOR',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '97.9',
            ),
            439 => 
            array (
                'CountryCode' => 'JOR',
                'Language' => 'Armenian',
                'IsOfficial' => 'F',
                'Percentage' => '1.0',
            ),
            440 => 
            array (
                'CountryCode' => 'JOR',
                'Language' => 'Circassian',
                'IsOfficial' => 'F',
                'Percentage' => '1.0',
            ),
            441 => 
            array (
                'CountryCode' => 'JPN',
                'Language' => 'Ainu',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            442 => 
            array (
                'CountryCode' => 'JPN',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            443 => 
            array (
                'CountryCode' => 'JPN',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            444 => 
            array (
                'CountryCode' => 'JPN',
                'Language' => 'Japanese',
                'IsOfficial' => 'T',
                'Percentage' => '99.1',
            ),
            445 => 
            array (
                'CountryCode' => 'JPN',
                'Language' => 'Korean',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            446 => 
            array (
                'CountryCode' => 'JPN',
                'Language' => 'Philippene Languages',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            447 => 
            array (
                'CountryCode' => 'KAZ',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '3.1',
            ),
            448 => 
            array (
                'CountryCode' => 'KAZ',
                'Language' => 'Kazakh',
                'IsOfficial' => 'T',
                'Percentage' => '46.0',
            ),
            449 => 
            array (
                'CountryCode' => 'KAZ',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '34.7',
            ),
            450 => 
            array (
                'CountryCode' => 'KAZ',
                'Language' => 'Tatar',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            451 => 
            array (
                'CountryCode' => 'KAZ',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '5.0',
            ),
            452 => 
            array (
                'CountryCode' => 'KAZ',
                'Language' => 'Uzbek',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            453 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Gusii',
                'IsOfficial' => 'F',
                'Percentage' => '6.1',
            ),
            454 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Kalenjin',
                'IsOfficial' => 'F',
                'Percentage' => '10.8',
            ),
            455 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Kamba',
                'IsOfficial' => 'F',
                'Percentage' => '11.2',
            ),
            456 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Kikuyu',
                'IsOfficial' => 'F',
                'Percentage' => '20.9',
            ),
            457 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Luhya',
                'IsOfficial' => 'F',
                'Percentage' => '13.8',
            ),
            458 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Luo',
                'IsOfficial' => 'F',
                'Percentage' => '12.8',
            ),
            459 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Masai',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            460 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Meru',
                'IsOfficial' => 'F',
                'Percentage' => '5.5',
            ),
            461 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Nyika',
                'IsOfficial' => 'F',
                'Percentage' => '4.8',
            ),
            462 => 
            array (
                'CountryCode' => 'KEN',
                'Language' => 'Turkana',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            463 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Kazakh',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            464 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Kirgiz',
                'IsOfficial' => 'T',
                'Percentage' => '59.7',
            ),
            465 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Russian',
                'IsOfficial' => 'T',
                'Percentage' => '16.2',
            ),
            466 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Tadzhik',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            467 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Tatar',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            468 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            469 => 
            array (
                'CountryCode' => 'KGZ',
                'Language' => 'Uzbek',
                'IsOfficial' => 'F',
                'Percentage' => '14.1',
            ),
            470 => 
            array (
                'CountryCode' => 'KHM',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '3.1',
            ),
            471 => 
            array (
                'CountryCode' => 'KHM',
                'Language' => 'Khmer',
                'IsOfficial' => 'T',
                'Percentage' => '88.6',
            ),
            472 => 
            array (
                'CountryCode' => 'KHM',
                'Language' => 'Tšam',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            473 => 
            array (
                'CountryCode' => 'KHM',
                'Language' => 'Vietnamese',
                'IsOfficial' => 'F',
                'Percentage' => '5.5',
            ),
            474 => 
            array (
                'CountryCode' => 'KIR',
                'Language' => 'Kiribati',
                'IsOfficial' => 'T',
                'Percentage' => '98.9',
            ),
            475 => 
            array (
                'CountryCode' => 'KIR',
                'Language' => 'Tuvalu',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            476 => 
            array (
                'CountryCode' => 'KNA',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '100.0',
            ),
            477 => 
            array (
                'CountryCode' => 'KNA',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            478 => 
            array (
                'CountryCode' => 'KOR',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            479 => 
            array (
                'CountryCode' => 'KOR',
                'Language' => 'Korean',
                'IsOfficial' => 'T',
                'Percentage' => '99.9',
            ),
            480 => 
            array (
                'CountryCode' => 'KWT',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '78.1',
            ),
            481 => 
            array (
                'CountryCode' => 'KWT',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            482 => 
            array (
                'CountryCode' => 'LAO',
                'Language' => 'Lao',
                'IsOfficial' => 'T',
                'Percentage' => '67.2',
            ),
            483 => 
            array (
                'CountryCode' => 'LAO',
                'Language' => 'Lao-Soung',
                'IsOfficial' => 'F',
                'Percentage' => '5.2',
            ),
            484 => 
            array (
                'CountryCode' => 'LAO',
                'Language' => 'Mon-khmer',
                'IsOfficial' => 'F',
                'Percentage' => '16.5',
            ),
            485 => 
            array (
                'CountryCode' => 'LAO',
                'Language' => 'Thai',
                'IsOfficial' => 'F',
                'Percentage' => '7.8',
            ),
            486 => 
            array (
                'CountryCode' => 'LBN',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '93.0',
            ),
            487 => 
            array (
                'CountryCode' => 'LBN',
                'Language' => 'Armenian',
                'IsOfficial' => 'F',
                'Percentage' => '5.9',
            ),
            488 => 
            array (
                'CountryCode' => 'LBN',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            489 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Bassa',
                'IsOfficial' => 'F',
                'Percentage' => '13.7',
            ),
            490 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Gio',
                'IsOfficial' => 'F',
                'Percentage' => '7.9',
            ),
            491 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Grebo',
                'IsOfficial' => 'F',
                'Percentage' => '8.9',
            ),
            492 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Kpelle',
                'IsOfficial' => 'F',
                'Percentage' => '19.5',
            ),
            493 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Kru',
                'IsOfficial' => 'F',
                'Percentage' => '7.2',
            ),
            494 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Loma',
                'IsOfficial' => 'F',
                'Percentage' => '5.8',
            ),
            495 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Malinke',
                'IsOfficial' => 'F',
                'Percentage' => '5.1',
            ),
            496 => 
            array (
                'CountryCode' => 'LBR',
                'Language' => 'Mano',
                'IsOfficial' => 'F',
                'Percentage' => '7.2',
            ),
            497 => 
            array (
                'CountryCode' => 'LBY',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '96.0',
            ),
            498 => 
            array (
                'CountryCode' => 'LBY',
                'Language' => 'Berberi',
                'IsOfficial' => 'F',
                'Percentage' => '1.0',
            ),
            499 => 
            array (
                'CountryCode' => 'LCA',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '80.0',
            ),
        ));
        \DB::table('countrylanguage')->insert(array (
            0 => 
            array (
                'CountryCode' => 'LCA',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '20.0',
            ),
            1 => 
            array (
                'CountryCode' => 'LIE',
                'Language' => 'German',
                'IsOfficial' => 'T',
                'Percentage' => '89.0',
            ),
            2 => 
            array (
                'CountryCode' => 'LIE',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            3 => 
            array (
                'CountryCode' => 'LIE',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            4 => 
            array (
                'CountryCode' => 'LKA',
                'Language' => 'Mixed Languages',
                'IsOfficial' => 'F',
                'Percentage' => '19.6',
            ),
            5 => 
            array (
                'CountryCode' => 'LKA',
                'Language' => 'Singali',
                'IsOfficial' => 'T',
                'Percentage' => '60.3',
            ),
            6 => 
            array (
                'CountryCode' => 'LKA',
                'Language' => 'Tamil',
                'IsOfficial' => 'T',
                'Percentage' => '19.6',
            ),
            7 => 
            array (
                'CountryCode' => 'LSO',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            8 => 
            array (
                'CountryCode' => 'LSO',
                'Language' => 'Sotho',
                'IsOfficial' => 'T',
                'Percentage' => '85.0',
            ),
            9 => 
            array (
                'CountryCode' => 'LSO',
                'Language' => 'Zulu',
                'IsOfficial' => 'F',
                'Percentage' => '15.0',
            ),
            10 => 
            array (
                'CountryCode' => 'LTU',
                'Language' => 'Belorussian',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            11 => 
            array (
                'CountryCode' => 'LTU',
                'Language' => 'Lithuanian',
                'IsOfficial' => 'T',
                'Percentage' => '81.6',
            ),
            12 => 
            array (
                'CountryCode' => 'LTU',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '7.0',
            ),
            13 => 
            array (
                'CountryCode' => 'LTU',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '8.1',
            ),
            14 => 
            array (
                'CountryCode' => 'LTU',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            15 => 
            array (
                'CountryCode' => 'LUX',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '4.2',
            ),
            16 => 
            array (
                'CountryCode' => 'LUX',
                'Language' => 'German',
                'IsOfficial' => 'T',
                'Percentage' => '2.3',
            ),
            17 => 
            array (
                'CountryCode' => 'LUX',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '4.6',
            ),
            18 => 
            array (
                'CountryCode' => 'LUX',
                'Language' => 'Luxembourgish',
                'IsOfficial' => 'T',
                'Percentage' => '64.4',
            ),
            19 => 
            array (
                'CountryCode' => 'LUX',
                'Language' => 'Portuguese',
                'IsOfficial' => 'F',
                'Percentage' => '13.0',
            ),
            20 => 
            array (
                'CountryCode' => 'LVA',
                'Language' => 'Belorussian',
                'IsOfficial' => 'F',
                'Percentage' => '4.1',
            ),
            21 => 
            array (
                'CountryCode' => 'LVA',
                'Language' => 'Latvian',
                'IsOfficial' => 'T',
                'Percentage' => '55.1',
            ),
            22 => 
            array (
                'CountryCode' => 'LVA',
                'Language' => 'Lithuanian',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            23 => 
            array (
                'CountryCode' => 'LVA',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '2.1',
            ),
            24 => 
            array (
                'CountryCode' => 'LVA',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '32.5',
            ),
            25 => 
            array (
                'CountryCode' => 'LVA',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '2.9',
            ),
            26 => 
            array (
                'CountryCode' => 'MAC',
                'Language' => 'Canton Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '85.6',
            ),
            27 => 
            array (
                'CountryCode' => 'MAC',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            28 => 
            array (
                'CountryCode' => 'MAC',
                'Language' => 'Mandarin Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            29 => 
            array (
                'CountryCode' => 'MAC',
                'Language' => 'Portuguese',
                'IsOfficial' => 'T',
                'Percentage' => '2.3',
            ),
            30 => 
            array (
                'CountryCode' => 'MAR',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '65.0',
            ),
            31 => 
            array (
                'CountryCode' => 'MAR',
                'Language' => 'Berberi',
                'IsOfficial' => 'F',
                'Percentage' => '33.0',
            ),
            32 => 
            array (
                'CountryCode' => 'MCO',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '6.5',
            ),
            33 => 
            array (
                'CountryCode' => 'MCO',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '41.9',
            ),
            34 => 
            array (
                'CountryCode' => 'MCO',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '16.1',
            ),
            35 => 
            array (
                'CountryCode' => 'MCO',
                'Language' => 'Monegasque',
                'IsOfficial' => 'F',
                'Percentage' => '16.1',
            ),
            36 => 
            array (
                'CountryCode' => 'MDA',
                'Language' => 'Bulgariana',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            37 => 
            array (
                'CountryCode' => 'MDA',
                'Language' => 'Gagauzi',
                'IsOfficial' => 'F',
                'Percentage' => '3.2',
            ),
            38 => 
            array (
                'CountryCode' => 'MDA',
                'Language' => 'Romanian',
                'IsOfficial' => 'T',
                'Percentage' => '61.9',
            ),
            39 => 
            array (
                'CountryCode' => 'MDA',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '23.2',
            ),
            40 => 
            array (
                'CountryCode' => 'MDA',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '8.6',
            ),
            41 => 
            array (
                'CountryCode' => 'MDG',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            42 => 
            array (
                'CountryCode' => 'MDG',
                'Language' => 'Malagasy',
                'IsOfficial' => 'T',
                'Percentage' => '98.9',
            ),
            43 => 
            array (
                'CountryCode' => 'MDV',
                'Language' => 'Dhivehi',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            44 => 
            array (
                'CountryCode' => 'MDV',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            45 => 
            array (
                'CountryCode' => 'MEX',
                'Language' => 'Mixtec',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            46 => 
            array (
                'CountryCode' => 'MEX',
                'Language' => 'Náhuatl',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            47 => 
            array (
                'CountryCode' => 'MEX',
                'Language' => 'Otomí',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            48 => 
            array (
                'CountryCode' => 'MEX',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '92.1',
            ),
            49 => 
            array (
                'CountryCode' => 'MEX',
                'Language' => 'Yucatec',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            50 => 
            array (
                'CountryCode' => 'MEX',
                'Language' => 'Zapotec',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            51 => 
            array (
                'CountryCode' => 'MHL',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            52 => 
            array (
                'CountryCode' => 'MHL',
                'Language' => 'Marshallese',
                'IsOfficial' => 'T',
                'Percentage' => '96.8',
            ),
            53 => 
            array (
                'CountryCode' => 'MKD',
                'Language' => 'Albaniana',
                'IsOfficial' => 'F',
                'Percentage' => '22.9',
            ),
            54 => 
            array (
                'CountryCode' => 'MKD',
                'Language' => 'Macedonian',
                'IsOfficial' => 'T',
                'Percentage' => '66.5',
            ),
            55 => 
            array (
                'CountryCode' => 'MKD',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            56 => 
            array (
                'CountryCode' => 'MKD',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            57 => 
            array (
                'CountryCode' => 'MKD',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '4.0',
            ),
            58 => 
            array (
                'CountryCode' => 'MLI',
                'Language' => 'Bambara',
                'IsOfficial' => 'F',
                'Percentage' => '31.8',
            ),
            59 => 
            array (
                'CountryCode' => 'MLI',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '13.9',
            ),
            60 => 
            array (
                'CountryCode' => 'MLI',
                'Language' => 'Senufo and Minianka',
                'IsOfficial' => 'F',
                'Percentage' => '12.0',
            ),
            61 => 
            array (
                'CountryCode' => 'MLI',
                'Language' => 'Songhai',
                'IsOfficial' => 'F',
                'Percentage' => '6.9',
            ),
            62 => 
            array (
                'CountryCode' => 'MLI',
                'Language' => 'Soninke',
                'IsOfficial' => 'F',
                'Percentage' => '8.7',
            ),
            63 => 
            array (
                'CountryCode' => 'MLI',
                'Language' => 'Tamashek',
                'IsOfficial' => 'F',
                'Percentage' => '7.3',
            ),
            64 => 
            array (
                'CountryCode' => 'MLT',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '2.1',
            ),
            65 => 
            array (
                'CountryCode' => 'MLT',
                'Language' => 'Maltese',
                'IsOfficial' => 'T',
                'Percentage' => '95.8',
            ),
            66 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Burmese',
                'IsOfficial' => 'T',
                'Percentage' => '69.0',
            ),
            67 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Chin',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            68 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Kachin',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            69 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Karen',
                'IsOfficial' => 'F',
                'Percentage' => '6.2',
            ),
            70 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Kayah',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            71 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Mon',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            72 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Rakhine',
                'IsOfficial' => 'F',
                'Percentage' => '4.5',
            ),
            73 => 
            array (
                'CountryCode' => 'MMR',
                'Language' => 'Shan',
                'IsOfficial' => 'F',
                'Percentage' => '8.5',
            ),
            74 => 
            array (
                'CountryCode' => 'MNG',
                'Language' => 'Bajad',
                'IsOfficial' => 'F',
                'Percentage' => '1.9',
            ),
            75 => 
            array (
                'CountryCode' => 'MNG',
                'Language' => 'Buryat',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            76 => 
            array (
                'CountryCode' => 'MNG',
                'Language' => 'Dariganga',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            77 => 
            array (
                'CountryCode' => 'MNG',
                'Language' => 'Dorbet',
                'IsOfficial' => 'F',
                'Percentage' => '2.7',
            ),
            78 => 
            array (
                'CountryCode' => 'MNG',
                'Language' => 'Kazakh',
                'IsOfficial' => 'F',
                'Percentage' => '5.9',
            ),
            79 => 
            array (
                'CountryCode' => 'MNG',
                'Language' => 'Mongolian',
                'IsOfficial' => 'T',
                'Percentage' => '78.8',
            ),
            80 => 
            array (
                'CountryCode' => 'MNP',
                'Language' => 'Carolinian',
                'IsOfficial' => 'F',
                'Percentage' => '4.8',
            ),
            81 => 
            array (
                'CountryCode' => 'MNP',
                'Language' => 'Chamorro',
                'IsOfficial' => 'F',
                'Percentage' => '30.0',
            ),
            82 => 
            array (
                'CountryCode' => 'MNP',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '7.1',
            ),
            83 => 
            array (
                'CountryCode' => 'MNP',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '4.8',
            ),
            84 => 
            array (
                'CountryCode' => 'MNP',
                'Language' => 'Korean',
                'IsOfficial' => 'F',
                'Percentage' => '6.5',
            ),
            85 => 
            array (
                'CountryCode' => 'MNP',
                'Language' => 'Philippene Languages',
                'IsOfficial' => 'F',
                'Percentage' => '34.1',
            ),
            86 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Chuabo',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            87 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Lomwe',
                'IsOfficial' => 'F',
                'Percentage' => '7.8',
            ),
            88 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Makua',
                'IsOfficial' => 'F',
                'Percentage' => '27.8',
            ),
            89 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Marendje',
                'IsOfficial' => 'F',
                'Percentage' => '3.5',
            ),
            90 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Nyanja',
                'IsOfficial' => 'F',
                'Percentage' => '3.3',
            ),
            91 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Ronga',
                'IsOfficial' => 'F',
                'Percentage' => '3.7',
            ),
            92 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Sena',
                'IsOfficial' => 'F',
                'Percentage' => '9.4',
            ),
            93 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Shona',
                'IsOfficial' => 'F',
                'Percentage' => '6.5',
            ),
            94 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Tsonga',
                'IsOfficial' => 'F',
                'Percentage' => '12.4',
            ),
            95 => 
            array (
                'CountryCode' => 'MOZ',
                'Language' => 'Tswa',
                'IsOfficial' => 'F',
                'Percentage' => '6.0',
            ),
            96 => 
            array (
                'CountryCode' => 'MRT',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            97 => 
            array (
                'CountryCode' => 'MRT',
                'Language' => 'Hassaniya',
                'IsOfficial' => 'F',
                'Percentage' => '81.7',
            ),
            98 => 
            array (
                'CountryCode' => 'MRT',
                'Language' => 'Soninke',
                'IsOfficial' => 'F',
                'Percentage' => '2.7',
            ),
            99 => 
            array (
                'CountryCode' => 'MRT',
                'Language' => 'Tukulor',
                'IsOfficial' => 'F',
                'Percentage' => '5.4',
            ),
            100 => 
            array (
                'CountryCode' => 'MRT',
                'Language' => 'Wolof',
                'IsOfficial' => 'F',
                'Percentage' => '6.6',
            ),
            101 => 
            array (
                'CountryCode' => 'MRT',
                'Language' => 'Zenaga',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            102 => 
            array (
                'CountryCode' => 'MSR',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            103 => 
            array (
                'CountryCode' => 'MTQ',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '96.6',
            ),
            104 => 
            array (
                'CountryCode' => 'MTQ',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            105 => 
            array (
                'CountryCode' => 'MUS',
                'Language' => 'Bhojpuri',
                'IsOfficial' => 'F',
                'Percentage' => '21.1',
            ),
            106 => 
            array (
                'CountryCode' => 'MUS',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '70.6',
            ),
            107 => 
            array (
                'CountryCode' => 'MUS',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '3.4',
            ),
            108 => 
            array (
                'CountryCode' => 'MUS',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            109 => 
            array (
                'CountryCode' => 'MUS',
                'Language' => 'Marathi',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            110 => 
            array (
                'CountryCode' => 'MUS',
                'Language' => 'Tamil',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            111 => 
            array (
                'CountryCode' => 'MWI',
                'Language' => 'Chichewa',
                'IsOfficial' => 'T',
                'Percentage' => '58.3',
            ),
            112 => 
            array (
                'CountryCode' => 'MWI',
                'Language' => 'Lomwe',
                'IsOfficial' => 'F',
                'Percentage' => '18.4',
            ),
            113 => 
            array (
                'CountryCode' => 'MWI',
                'Language' => 'Ngoni',
                'IsOfficial' => 'F',
                'Percentage' => '6.7',
            ),
            114 => 
            array (
                'CountryCode' => 'MWI',
                'Language' => 'Yao',
                'IsOfficial' => 'F',
                'Percentage' => '13.2',
            ),
            115 => 
            array (
                'CountryCode' => 'MYS',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '9.0',
            ),
            116 => 
            array (
                'CountryCode' => 'MYS',
                'Language' => 'Dusun',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            117 => 
            array (
                'CountryCode' => 'MYS',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            118 => 
            array (
                'CountryCode' => 'MYS',
                'Language' => 'Iban',
                'IsOfficial' => 'F',
                'Percentage' => '2.8',
            ),
            119 => 
            array (
                'CountryCode' => 'MYS',
                'Language' => 'Malay',
                'IsOfficial' => 'T',
                'Percentage' => '58.4',
            ),
            120 => 
            array (
                'CountryCode' => 'MYS',
                'Language' => 'Tamil',
                'IsOfficial' => 'F',
                'Percentage' => '3.9',
            ),
            121 => 
            array (
                'CountryCode' => 'MYT',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '20.3',
            ),
            122 => 
            array (
                'CountryCode' => 'MYT',
                'Language' => 'Mahoré',
                'IsOfficial' => 'F',
                'Percentage' => '41.9',
            ),
            123 => 
            array (
                'CountryCode' => 'MYT',
                'Language' => 'Malagasy',
                'IsOfficial' => 'F',
                'Percentage' => '16.1',
            ),
            124 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'Afrikaans',
                'IsOfficial' => 'F',
                'Percentage' => '9.5',
            ),
            125 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'Caprivi',
                'IsOfficial' => 'F',
                'Percentage' => '4.7',
            ),
            126 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            127 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'Herero',
                'IsOfficial' => 'F',
                'Percentage' => '8.0',
            ),
            128 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'Kavango',
                'IsOfficial' => 'F',
                'Percentage' => '9.7',
            ),
            129 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'Nama',
                'IsOfficial' => 'F',
                'Percentage' => '12.4',
            ),
            130 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'Ovambo',
                'IsOfficial' => 'F',
                'Percentage' => '50.7',
            ),
            131 => 
            array (
                'CountryCode' => 'NAM',
                'Language' => 'San',
                'IsOfficial' => 'F',
                'Percentage' => '1.9',
            ),
            132 => 
            array (
                'CountryCode' => 'NCL',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '34.3',
            ),
            133 => 
            array (
                'CountryCode' => 'NCL',
                'Language' => 'Malenasian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '45.4',
            ),
            134 => 
            array (
                'CountryCode' => 'NCL',
                'Language' => 'Polynesian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '11.6',
            ),
            135 => 
            array (
                'CountryCode' => 'NER',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '9.7',
            ),
            136 => 
            array (
                'CountryCode' => 'NER',
                'Language' => 'Hausa',
                'IsOfficial' => 'F',
                'Percentage' => '53.1',
            ),
            137 => 
            array (
                'CountryCode' => 'NER',
                'Language' => 'Kanuri',
                'IsOfficial' => 'F',
                'Percentage' => '4.4',
            ),
            138 => 
            array (
                'CountryCode' => 'NER',
                'Language' => 'Songhai-zerma',
                'IsOfficial' => 'F',
                'Percentage' => '21.2',
            ),
            139 => 
            array (
                'CountryCode' => 'NER',
                'Language' => 'Tamashek',
                'IsOfficial' => 'F',
                'Percentage' => '10.4',
            ),
            140 => 
            array (
                'CountryCode' => 'NFK',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            141 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Bura',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            142 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Edo',
                'IsOfficial' => 'F',
                'Percentage' => '3.3',
            ),
            143 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '11.3',
            ),
            144 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Hausa',
                'IsOfficial' => 'F',
                'Percentage' => '21.1',
            ),
            145 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Ibibio',
                'IsOfficial' => 'F',
                'Percentage' => '5.6',
            ),
            146 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Ibo',
                'IsOfficial' => 'F',
                'Percentage' => '18.1',
            ),
            147 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Ijo',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            148 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Joruba',
                'IsOfficial' => 'F',
                'Percentage' => '21.4',
            ),
            149 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Kanuri',
                'IsOfficial' => 'F',
                'Percentage' => '4.1',
            ),
            150 => 
            array (
                'CountryCode' => 'NGA',
                'Language' => 'Tiv',
                'IsOfficial' => 'F',
                'Percentage' => '2.3',
            ),
            151 => 
            array (
                'CountryCode' => 'NIC',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            152 => 
            array (
                'CountryCode' => 'NIC',
                'Language' => 'Miskito',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            153 => 
            array (
                'CountryCode' => 'NIC',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '97.6',
            ),
            154 => 
            array (
                'CountryCode' => 'NIC',
                'Language' => 'Sumo',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            155 => 
            array (
                'CountryCode' => 'NIU',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            156 => 
            array (
                'CountryCode' => 'NIU',
                'Language' => 'Niue',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            157 => 
            array (
                'CountryCode' => 'NLD',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            158 => 
            array (
                'CountryCode' => 'NLD',
                'Language' => 'Dutch',
                'IsOfficial' => 'T',
                'Percentage' => '95.6',
            ),
            159 => 
            array (
                'CountryCode' => 'NLD',
                'Language' => 'Fries',
                'IsOfficial' => 'F',
                'Percentage' => '3.7',
            ),
            160 => 
            array (
                'CountryCode' => 'NLD',
                'Language' => 'Turkish',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            161 => 
            array (
                'CountryCode' => 'NOR',
                'Language' => 'Danish',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            162 => 
            array (
                'CountryCode' => 'NOR',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            163 => 
            array (
                'CountryCode' => 'NOR',
                'Language' => 'Norwegian',
                'IsOfficial' => 'T',
                'Percentage' => '96.6',
            ),
            164 => 
            array (
                'CountryCode' => 'NOR',
                'Language' => 'Saame',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            165 => 
            array (
                'CountryCode' => 'NOR',
                'Language' => 'Swedish',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            166 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Bhojpuri',
                'IsOfficial' => 'F',
                'Percentage' => '7.5',
            ),
            167 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '3.0',
            ),
            168 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Maithili',
                'IsOfficial' => 'F',
                'Percentage' => '11.9',
            ),
            169 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Nepali',
                'IsOfficial' => 'T',
                'Percentage' => '50.4',
            ),
            170 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Newari',
                'IsOfficial' => 'F',
                'Percentage' => '3.7',
            ),
            171 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Tamang',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            172 => 
            array (
                'CountryCode' => 'NPL',
                'Language' => 'Tharu',
                'IsOfficial' => 'F',
                'Percentage' => '5.4',
            ),
            173 => 
            array (
                'CountryCode' => 'NRU',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '8.5',
            ),
            174 => 
            array (
                'CountryCode' => 'NRU',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '7.5',
            ),
            175 => 
            array (
                'CountryCode' => 'NRU',
                'Language' => 'Kiribati',
                'IsOfficial' => 'F',
                'Percentage' => '17.9',
            ),
            176 => 
            array (
                'CountryCode' => 'NRU',
                'Language' => 'Nauru',
                'IsOfficial' => 'T',
                'Percentage' => '57.5',
            ),
            177 => 
            array (
                'CountryCode' => 'NRU',
                'Language' => 'Tuvalu',
                'IsOfficial' => 'F',
                'Percentage' => '8.5',
            ),
            178 => 
            array (
                'CountryCode' => 'NZL',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '87.0',
            ),
            179 => 
            array (
                'CountryCode' => 'NZL',
                'Language' => 'Maori',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            180 => 
            array (
                'CountryCode' => 'OMN',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '76.7',
            ),
            181 => 
            array (
                'CountryCode' => 'OMN',
                'Language' => 'Balochi',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            182 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Balochi',
                'IsOfficial' => 'F',
                'Percentage' => '3.0',
            ),
            183 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Brahui',
                'IsOfficial' => 'F',
                'Percentage' => '1.2',
            ),
            184 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Hindko',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            185 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Pashto',
                'IsOfficial' => 'F',
                'Percentage' => '13.1',
            ),
            186 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Punjabi',
                'IsOfficial' => 'F',
                'Percentage' => '48.2',
            ),
            187 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Saraiki',
                'IsOfficial' => 'F',
                'Percentage' => '9.8',
            ),
            188 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Sindhi',
                'IsOfficial' => 'F',
                'Percentage' => '11.8',
            ),
            189 => 
            array (
                'CountryCode' => 'PAK',
                'Language' => 'Urdu',
                'IsOfficial' => 'T',
                'Percentage' => '7.6',
            ),
            190 => 
            array (
                'CountryCode' => 'PAN',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            191 => 
            array (
                'CountryCode' => 'PAN',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '14.0',
            ),
            192 => 
            array (
                'CountryCode' => 'PAN',
                'Language' => 'Cuna',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            193 => 
            array (
                'CountryCode' => 'PAN',
                'Language' => 'Embera',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            194 => 
            array (
                'CountryCode' => 'PAN',
                'Language' => 'Guaymí',
                'IsOfficial' => 'F',
                'Percentage' => '5.3',
            ),
            195 => 
            array (
                'CountryCode' => 'PAN',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '76.8',
            ),
            196 => 
            array (
                'CountryCode' => 'PCN',
                'Language' => 'Pitcairnese',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            197 => 
            array (
                'CountryCode' => 'PER',
                'Language' => 'Aimará',
                'IsOfficial' => 'T',
                'Percentage' => '2.3',
            ),
            198 => 
            array (
                'CountryCode' => 'PER',
                'Language' => 'Ketšua',
                'IsOfficial' => 'T',
                'Percentage' => '16.4',
            ),
            199 => 
            array (
                'CountryCode' => 'PER',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '79.8',
            ),
            200 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Bicol',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            201 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Cebuano',
                'IsOfficial' => 'F',
                'Percentage' => '23.3',
            ),
            202 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Hiligaynon',
                'IsOfficial' => 'F',
                'Percentage' => '9.1',
            ),
            203 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Ilocano',
                'IsOfficial' => 'F',
                'Percentage' => '9.3',
            ),
            204 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Maguindanao',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            205 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Maranao',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            206 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Pampango',
                'IsOfficial' => 'F',
                'Percentage' => '3.0',
            ),
            207 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Pangasinan',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            208 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Pilipino',
                'IsOfficial' => 'T',
                'Percentage' => '29.3',
            ),
            209 => 
            array (
                'CountryCode' => 'PHL',
                'Language' => 'Waray-waray',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            210 => 
            array (
                'CountryCode' => 'PLW',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            211 => 
            array (
                'CountryCode' => 'PLW',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '3.2',
            ),
            212 => 
            array (
                'CountryCode' => 'PLW',
                'Language' => 'Palau',
                'IsOfficial' => 'T',
                'Percentage' => '82.2',
            ),
            213 => 
            array (
                'CountryCode' => 'PLW',
                'Language' => 'Philippene Languages',
                'IsOfficial' => 'F',
                'Percentage' => '9.2',
            ),
            214 => 
            array (
                'CountryCode' => 'PNG',
                'Language' => 'Malenasian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '20.0',
            ),
            215 => 
            array (
                'CountryCode' => 'PNG',
                'Language' => 'Papuan Languages',
                'IsOfficial' => 'F',
                'Percentage' => '78.1',
            ),
            216 => 
            array (
                'CountryCode' => 'POL',
                'Language' => 'Belorussian',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            217 => 
            array (
                'CountryCode' => 'POL',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            218 => 
            array (
                'CountryCode' => 'POL',
                'Language' => 'Polish',
                'IsOfficial' => 'T',
                'Percentage' => '97.6',
            ),
            219 => 
            array (
                'CountryCode' => 'POL',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            220 => 
            array (
                'CountryCode' => 'PRI',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '47.4',
            ),
            221 => 
            array (
                'CountryCode' => 'PRI',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '51.3',
            ),
            222 => 
            array (
                'CountryCode' => 'PRK',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            223 => 
            array (
                'CountryCode' => 'PRK',
                'Language' => 'Korean',
                'IsOfficial' => 'T',
                'Percentage' => '99.9',
            ),
            224 => 
            array (
                'CountryCode' => 'PRT',
                'Language' => 'Portuguese',
                'IsOfficial' => 'T',
                'Percentage' => '99.0',
            ),
            225 => 
            array (
                'CountryCode' => 'PRY',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            226 => 
            array (
                'CountryCode' => 'PRY',
                'Language' => 'Guaraní',
                'IsOfficial' => 'T',
                'Percentage' => '40.1',
            ),
            227 => 
            array (
                'CountryCode' => 'PRY',
                'Language' => 'Portuguese',
                'IsOfficial' => 'F',
                'Percentage' => '3.2',
            ),
            228 => 
            array (
                'CountryCode' => 'PRY',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '55.1',
            ),
            229 => 
            array (
                'CountryCode' => 'PSE',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '95.9',
            ),
            230 => 
            array (
                'CountryCode' => 'PSE',
                'Language' => 'Hebrew',
                'IsOfficial' => 'F',
                'Percentage' => '4.1',
            ),
            231 => 
            array (
                'CountryCode' => 'PYF',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '2.9',
            ),
            232 => 
            array (
                'CountryCode' => 'PYF',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '40.8',
            ),
            233 => 
            array (
                'CountryCode' => 'PYF',
                'Language' => 'Tahitian',
                'IsOfficial' => 'F',
                'Percentage' => '46.4',
            ),
            234 => 
            array (
                'CountryCode' => 'QAT',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '40.7',
            ),
            235 => 
            array (
                'CountryCode' => 'QAT',
                'Language' => 'Urdu',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            236 => 
            array (
                'CountryCode' => 'REU',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '2.8',
            ),
            237 => 
            array (
                'CountryCode' => 'REU',
                'Language' => 'Comorian',
                'IsOfficial' => 'F',
                'Percentage' => '2.8',
            ),
            238 => 
            array (
                'CountryCode' => 'REU',
                'Language' => 'Creole French',
                'IsOfficial' => 'F',
                'Percentage' => '91.5',
            ),
            239 => 
            array (
                'CountryCode' => 'REU',
                'Language' => 'Malagasy',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            240 => 
            array (
                'CountryCode' => 'REU',
                'Language' => 'Tamil',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            241 => 
            array (
                'CountryCode' => 'ROM',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            242 => 
            array (
                'CountryCode' => 'ROM',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '7.2',
            ),
            243 => 
            array (
                'CountryCode' => 'ROM',
                'Language' => 'Romani',
                'IsOfficial' => 'T',
                'Percentage' => '0.7',
            ),
            244 => 
            array (
                'CountryCode' => 'ROM',
                'Language' => 'Romanian',
                'IsOfficial' => 'T',
                'Percentage' => '90.7',
            ),
            245 => 
            array (
                'CountryCode' => 'ROM',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            246 => 
            array (
                'CountryCode' => 'ROM',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            247 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Avarian',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            248 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Bashkir',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            249 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Belorussian',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            250 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Chechen',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            251 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Chuvash',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            252 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Kazakh',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            253 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Mari',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            254 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Mordva',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            255 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Russian',
                'IsOfficial' => 'T',
                'Percentage' => '86.6',
            ),
            256 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Tatar',
                'IsOfficial' => 'F',
                'Percentage' => '3.2',
            ),
            257 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Udmur',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            258 => 
            array (
                'CountryCode' => 'RUS',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            259 => 
            array (
                'CountryCode' => 'RWA',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            260 => 
            array (
                'CountryCode' => 'RWA',
                'Language' => 'Rwanda',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            261 => 
            array (
                'CountryCode' => 'SAU',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '95.0',
            ),
            262 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '49.4',
            ),
            263 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Bari',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            264 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Beja',
                'IsOfficial' => 'F',
                'Percentage' => '6.4',
            ),
            265 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Chilluk',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            266 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Dinka',
                'IsOfficial' => 'F',
                'Percentage' => '11.5',
            ),
            267 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Fur',
                'IsOfficial' => 'F',
                'Percentage' => '2.1',
            ),
            268 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Lotuko',
                'IsOfficial' => 'F',
                'Percentage' => '1.5',
            ),
            269 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Nubian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '8.1',
            ),
            270 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Nuer',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            271 => 
            array (
                'CountryCode' => 'SDN',
                'Language' => 'Zande',
                'IsOfficial' => 'F',
                'Percentage' => '2.7',
            ),
            272 => 
            array (
                'CountryCode' => 'SEN',
                'Language' => 'Diola',
                'IsOfficial' => 'F',
                'Percentage' => '5.0',
            ),
            273 => 
            array (
                'CountryCode' => 'SEN',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '21.7',
            ),
            274 => 
            array (
                'CountryCode' => 'SEN',
                'Language' => 'Malinke',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            275 => 
            array (
                'CountryCode' => 'SEN',
                'Language' => 'Serer',
                'IsOfficial' => 'F',
                'Percentage' => '12.5',
            ),
            276 => 
            array (
                'CountryCode' => 'SEN',
                'Language' => 'Soninke',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            277 => 
            array (
                'CountryCode' => 'SEN',
                'Language' => 'Wolof',
                'IsOfficial' => 'T',
                'Percentage' => '48.1',
            ),
            278 => 
            array (
                'CountryCode' => 'SGP',
                'Language' => 'Chinese',
                'IsOfficial' => 'T',
                'Percentage' => '77.1',
            ),
            279 => 
            array (
                'CountryCode' => 'SGP',
                'Language' => 'Malay',
                'IsOfficial' => 'T',
                'Percentage' => '14.1',
            ),
            280 => 
            array (
                'CountryCode' => 'SGP',
                'Language' => 'Tamil',
                'IsOfficial' => 'T',
                'Percentage' => '7.4',
            ),
            281 => 
            array (
                'CountryCode' => 'SHN',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            282 => 
            array (
                'CountryCode' => 'SJM',
                'Language' => 'Norwegian',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            283 => 
            array (
                'CountryCode' => 'SJM',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            284 => 
            array (
                'CountryCode' => 'SLB',
                'Language' => 'Malenasian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '85.6',
            ),
            285 => 
            array (
                'CountryCode' => 'SLB',
                'Language' => 'Papuan Languages',
                'IsOfficial' => 'F',
                'Percentage' => '8.6',
            ),
            286 => 
            array (
                'CountryCode' => 'SLB',
                'Language' => 'Polynesian Languages',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            287 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Bullom-sherbro',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            288 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Ful',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            289 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Kono-vai',
                'IsOfficial' => 'F',
                'Percentage' => '5.1',
            ),
            290 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Kuranko',
                'IsOfficial' => 'F',
                'Percentage' => '3.4',
            ),
            291 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Limba',
                'IsOfficial' => 'F',
                'Percentage' => '8.3',
            ),
            292 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Mende',
                'IsOfficial' => 'F',
                'Percentage' => '34.8',
            ),
            293 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Temne',
                'IsOfficial' => 'F',
                'Percentage' => '31.8',
            ),
            294 => 
            array (
                'CountryCode' => 'SLE',
                'Language' => 'Yalunka',
                'IsOfficial' => 'F',
                'Percentage' => '3.4',
            ),
            295 => 
            array (
                'CountryCode' => 'SLV',
                'Language' => 'Nahua',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            296 => 
            array (
                'CountryCode' => 'SLV',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            297 => 
            array (
                'CountryCode' => 'SMR',
                'Language' => 'Italian',
                'IsOfficial' => 'T',
                'Percentage' => '100.0',
            ),
            298 => 
            array (
                'CountryCode' => 'SOM',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            299 => 
            array (
                'CountryCode' => 'SOM',
                'Language' => 'Somali',
                'IsOfficial' => 'T',
                'Percentage' => '98.3',
            ),
            300 => 
            array (
                'CountryCode' => 'SPM',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            301 => 
            array (
                'CountryCode' => 'STP',
                'Language' => 'Crioulo',
                'IsOfficial' => 'F',
                'Percentage' => '86.3',
            ),
            302 => 
            array (
                'CountryCode' => 'STP',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            303 => 
            array (
                'CountryCode' => 'SUR',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            304 => 
            array (
                'CountryCode' => 'SUR',
                'Language' => 'Sranantonga',
                'IsOfficial' => 'F',
                'Percentage' => '81.0',
            ),
            305 => 
            array (
                'CountryCode' => 'SVK',
                'Language' => 'Czech and Moravian',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            306 => 
            array (
                'CountryCode' => 'SVK',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '10.5',
            ),
            307 => 
            array (
                'CountryCode' => 'SVK',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '1.7',
            ),
            308 => 
            array (
                'CountryCode' => 'SVK',
                'Language' => 'Slovak',
                'IsOfficial' => 'T',
                'Percentage' => '85.6',
            ),
            309 => 
            array (
                'CountryCode' => 'SVK',
                'Language' => 'Ukrainian and Russian',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            310 => 
            array (
                'CountryCode' => 'SVN',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            311 => 
            array (
                'CountryCode' => 'SVN',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'F',
                'Percentage' => '7.9',
            ),
            312 => 
            array (
                'CountryCode' => 'SVN',
                'Language' => 'Slovene',
                'IsOfficial' => 'T',
                'Percentage' => '87.9',
            ),
            313 => 
            array (
                'CountryCode' => 'SWE',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '0.8',
            ),
            314 => 
            array (
                'CountryCode' => 'SWE',
                'Language' => 'Finnish',
                'IsOfficial' => 'F',
                'Percentage' => '2.4',
            ),
            315 => 
            array (
                'CountryCode' => 'SWE',
                'Language' => 'Norwegian',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            316 => 
            array (
                'CountryCode' => 'SWE',
                'Language' => 'Southern Slavic Languages',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            317 => 
            array (
                'CountryCode' => 'SWE',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            318 => 
            array (
                'CountryCode' => 'SWE',
                'Language' => 'Swedish',
                'IsOfficial' => 'T',
                'Percentage' => '89.5',
            ),
            319 => 
            array (
                'CountryCode' => 'SWZ',
                'Language' => 'Swazi',
                'IsOfficial' => 'T',
                'Percentage' => '89.9',
            ),
            320 => 
            array (
                'CountryCode' => 'SWZ',
                'Language' => 'Zulu',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            321 => 
            array (
                'CountryCode' => 'SYC',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '3.8',
            ),
            322 => 
            array (
                'CountryCode' => 'SYC',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '1.3',
            ),
            323 => 
            array (
                'CountryCode' => 'SYC',
                'Language' => 'Seselwa',
                'IsOfficial' => 'F',
                'Percentage' => '91.3',
            ),
            324 => 
            array (
                'CountryCode' => 'SYR',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '90.0',
            ),
            325 => 
            array (
                'CountryCode' => 'SYR',
                'Language' => 'Kurdish',
                'IsOfficial' => 'F',
                'Percentage' => '9.0',
            ),
            326 => 
            array (
                'CountryCode' => 'TCA',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            327 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '12.3',
            ),
            328 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Gorane',
                'IsOfficial' => 'F',
                'Percentage' => '6.2',
            ),
            329 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Hadjarai',
                'IsOfficial' => 'F',
                'Percentage' => '6.7',
            ),
            330 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Kanem-bornu',
                'IsOfficial' => 'F',
                'Percentage' => '9.0',
            ),
            331 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Mayo-kebbi',
                'IsOfficial' => 'F',
                'Percentage' => '11.5',
            ),
            332 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Ouaddai',
                'IsOfficial' => 'F',
                'Percentage' => '8.7',
            ),
            333 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Sara',
                'IsOfficial' => 'F',
                'Percentage' => '27.7',
            ),
            334 => 
            array (
                'CountryCode' => 'TCD',
                'Language' => 'Tandjile',
                'IsOfficial' => 'F',
                'Percentage' => '6.5',
            ),
            335 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Ane',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            336 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Ewe',
                'IsOfficial' => 'T',
                'Percentage' => '23.2',
            ),
            337 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Gurma',
                'IsOfficial' => 'F',
                'Percentage' => '3.4',
            ),
            338 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Kabyé',
                'IsOfficial' => 'T',
                'Percentage' => '13.8',
            ),
            339 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Kotokoli',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            340 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Moba',
                'IsOfficial' => 'F',
                'Percentage' => '5.4',
            ),
            341 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Naudemba',
                'IsOfficial' => 'F',
                'Percentage' => '4.1',
            ),
            342 => 
            array (
                'CountryCode' => 'TGO',
                'Language' => 'Watyi',
                'IsOfficial' => 'F',
                'Percentage' => '10.3',
            ),
            343 => 
            array (
                'CountryCode' => 'THA',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '12.1',
            ),
            344 => 
            array (
                'CountryCode' => 'THA',
                'Language' => 'Khmer',
                'IsOfficial' => 'F',
                'Percentage' => '1.3',
            ),
            345 => 
            array (
                'CountryCode' => 'THA',
                'Language' => 'Kuy',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            346 => 
            array (
                'CountryCode' => 'THA',
                'Language' => 'Lao',
                'IsOfficial' => 'F',
                'Percentage' => '26.9',
            ),
            347 => 
            array (
                'CountryCode' => 'THA',
                'Language' => 'Malay',
                'IsOfficial' => 'F',
                'Percentage' => '3.6',
            ),
            348 => 
            array (
                'CountryCode' => 'THA',
                'Language' => 'Thai',
                'IsOfficial' => 'T',
                'Percentage' => '52.6',
            ),
            349 => 
            array (
                'CountryCode' => 'TJK',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '9.7',
            ),
            350 => 
            array (
                'CountryCode' => 'TJK',
                'Language' => 'Tadzhik',
                'IsOfficial' => 'T',
                'Percentage' => '62.2',
            ),
            351 => 
            array (
                'CountryCode' => 'TJK',
                'Language' => 'Uzbek',
                'IsOfficial' => 'F',
                'Percentage' => '23.2',
            ),
            352 => 
            array (
                'CountryCode' => 'TKL',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            353 => 
            array (
                'CountryCode' => 'TKL',
                'Language' => 'Tokelau',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            354 => 
            array (
                'CountryCode' => 'TKM',
                'Language' => 'Kazakh',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            355 => 
            array (
                'CountryCode' => 'TKM',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '6.7',
            ),
            356 => 
            array (
                'CountryCode' => 'TKM',
                'Language' => 'Turkmenian',
                'IsOfficial' => 'T',
                'Percentage' => '76.7',
            ),
            357 => 
            array (
                'CountryCode' => 'TKM',
                'Language' => 'Uzbek',
                'IsOfficial' => 'F',
                'Percentage' => '9.2',
            ),
            358 => 
            array (
                'CountryCode' => 'TMP',
                'Language' => 'Portuguese',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            359 => 
            array (
                'CountryCode' => 'TMP',
                'Language' => 'Sunda',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            360 => 
            array (
                'CountryCode' => 'TON',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            361 => 
            array (
                'CountryCode' => 'TON',
                'Language' => 'Tongan',
                'IsOfficial' => 'T',
                'Percentage' => '98.3',
            ),
            362 => 
            array (
                'CountryCode' => 'TTO',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '2.9',
            ),
            363 => 
            array (
                'CountryCode' => 'TTO',
                'Language' => 'English',
                'IsOfficial' => 'F',
                'Percentage' => '93.5',
            ),
            364 => 
            array (
                'CountryCode' => 'TTO',
                'Language' => 'Hindi',
                'IsOfficial' => 'F',
                'Percentage' => '3.4',
            ),
            365 => 
            array (
                'CountryCode' => 'TUN',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '69.9',
            ),
            366 => 
            array (
                'CountryCode' => 'TUN',
                'Language' => 'Arabic-French',
                'IsOfficial' => 'F',
                'Percentage' => '26.3',
            ),
            367 => 
            array (
                'CountryCode' => 'TUN',
                'Language' => 'Arabic-French-English',
                'IsOfficial' => 'F',
                'Percentage' => '3.2',
            ),
            368 => 
            array (
                'CountryCode' => 'TUR',
                'Language' => 'Arabic',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            369 => 
            array (
                'CountryCode' => 'TUR',
                'Language' => 'Kurdish',
                'IsOfficial' => 'F',
                'Percentage' => '10.6',
            ),
            370 => 
            array (
                'CountryCode' => 'TUR',
                'Language' => 'Turkish',
                'IsOfficial' => 'T',
                'Percentage' => '87.6',
            ),
            371 => 
            array (
                'CountryCode' => 'TUV',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            372 => 
            array (
                'CountryCode' => 'TUV',
                'Language' => 'Kiribati',
                'IsOfficial' => 'F',
                'Percentage' => '7.5',
            ),
            373 => 
            array (
                'CountryCode' => 'TUV',
                'Language' => 'Tuvalu',
                'IsOfficial' => 'T',
                'Percentage' => '92.5',
            ),
            374 => 
            array (
                'CountryCode' => 'TWN',
                'Language' => 'Ami',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            375 => 
            array (
                'CountryCode' => 'TWN',
                'Language' => 'Atayal',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            376 => 
            array (
                'CountryCode' => 'TWN',
                'Language' => 'Hakka',
                'IsOfficial' => 'F',
                'Percentage' => '11.0',
            ),
            377 => 
            array (
                'CountryCode' => 'TWN',
                'Language' => 'Mandarin Chinese',
                'IsOfficial' => 'T',
                'Percentage' => '20.1',
            ),
            378 => 
            array (
                'CountryCode' => 'TWN',
                'Language' => 'Min',
                'IsOfficial' => 'F',
                'Percentage' => '66.7',
            ),
            379 => 
            array (
                'CountryCode' => 'TWN',
                'Language' => 'Paiwan',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            380 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Chaga and Pare',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            381 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Gogo',
                'IsOfficial' => 'F',
                'Percentage' => '3.9',
            ),
            382 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Ha',
                'IsOfficial' => 'F',
                'Percentage' => '3.5',
            ),
            383 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Haya',
                'IsOfficial' => 'F',
                'Percentage' => '5.9',
            ),
            384 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Hehet',
                'IsOfficial' => 'F',
                'Percentage' => '6.9',
            ),
            385 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Luguru',
                'IsOfficial' => 'F',
                'Percentage' => '4.9',
            ),
            386 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Makonde',
                'IsOfficial' => 'F',
                'Percentage' => '5.9',
            ),
            387 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Nyakusa',
                'IsOfficial' => 'F',
                'Percentage' => '5.4',
            ),
            388 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Nyamwesi',
                'IsOfficial' => 'F',
                'Percentage' => '21.1',
            ),
            389 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Shambala',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            390 => 
            array (
                'CountryCode' => 'TZA',
                'Language' => 'Swahili',
                'IsOfficial' => 'T',
                'Percentage' => '8.8',
            ),
            391 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Acholi',
                'IsOfficial' => 'F',
                'Percentage' => '4.4',
            ),
            392 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Ganda',
                'IsOfficial' => 'F',
                'Percentage' => '18.1',
            ),
            393 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Gisu',
                'IsOfficial' => 'F',
                'Percentage' => '4.5',
            ),
            394 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Kiga',
                'IsOfficial' => 'F',
                'Percentage' => '8.3',
            ),
            395 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Lango',
                'IsOfficial' => 'F',
                'Percentage' => '5.9',
            ),
            396 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Lugbara',
                'IsOfficial' => 'F',
                'Percentage' => '4.7',
            ),
            397 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Nkole',
                'IsOfficial' => 'F',
                'Percentage' => '10.7',
            ),
            398 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Rwanda',
                'IsOfficial' => 'F',
                'Percentage' => '3.2',
            ),
            399 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Soga',
                'IsOfficial' => 'F',
                'Percentage' => '8.2',
            ),
            400 => 
            array (
                'CountryCode' => 'UGA',
                'Language' => 'Teso',
                'IsOfficial' => 'F',
                'Percentage' => '6.0',
            ),
            401 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Belorussian',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            402 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Bulgariana',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            403 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            404 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            405 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Romanian',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            406 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '32.9',
            ),
            407 => 
            array (
                'CountryCode' => 'UKR',
                'Language' => 'Ukrainian',
                'IsOfficial' => 'T',
                'Percentage' => '64.7',
            ),
            408 => 
            array (
                'CountryCode' => 'UMI',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            409 => 
            array (
                'CountryCode' => 'URY',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '95.7',
            ),
            410 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            411 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '86.2',
            ),
            412 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            413 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'German',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            414 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Italian',
                'IsOfficial' => 'F',
                'Percentage' => '0.6',
            ),
            415 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Japanese',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            416 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Korean',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            417 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Polish',
                'IsOfficial' => 'F',
                'Percentage' => '0.3',
            ),
            418 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Portuguese',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            419 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '7.5',
            ),
            420 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Tagalog',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            421 => 
            array (
                'CountryCode' => 'USA',
                'Language' => 'Vietnamese',
                'IsOfficial' => 'F',
                'Percentage' => '0.2',
            ),
            422 => 
            array (
                'CountryCode' => 'UZB',
                'Language' => 'Karakalpak',
                'IsOfficial' => 'F',
                'Percentage' => '2.0',
            ),
            423 => 
            array (
                'CountryCode' => 'UZB',
                'Language' => 'Kazakh',
                'IsOfficial' => 'F',
                'Percentage' => '3.8',
            ),
            424 => 
            array (
                'CountryCode' => 'UZB',
                'Language' => 'Russian',
                'IsOfficial' => 'F',
                'Percentage' => '10.9',
            ),
            425 => 
            array (
                'CountryCode' => 'UZB',
                'Language' => 'Tadzhik',
                'IsOfficial' => 'F',
                'Percentage' => '4.4',
            ),
            426 => 
            array (
                'CountryCode' => 'UZB',
                'Language' => 'Tatar',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            427 => 
            array (
                'CountryCode' => 'UZB',
                'Language' => 'Uzbek',
                'IsOfficial' => 'T',
                'Percentage' => '72.6',
            ),
            428 => 
            array (
                'CountryCode' => 'VAT',
                'Language' => 'Italian',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            429 => 
            array (
                'CountryCode' => 'VCT',
                'Language' => 'Creole English',
                'IsOfficial' => 'F',
                'Percentage' => '99.1',
            ),
            430 => 
            array (
                'CountryCode' => 'VCT',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            431 => 
            array (
                'CountryCode' => 'VEN',
                'Language' => 'Goajiro',
                'IsOfficial' => 'F',
                'Percentage' => '0.4',
            ),
            432 => 
            array (
                'CountryCode' => 'VEN',
                'Language' => 'Spanish',
                'IsOfficial' => 'T',
                'Percentage' => '96.9',
            ),
            433 => 
            array (
                'CountryCode' => 'VEN',
                'Language' => 'Warrau',
                'IsOfficial' => 'F',
                'Percentage' => '0.1',
            ),
            434 => 
            array (
                'CountryCode' => 'VGB',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.0',
            ),
            435 => 
            array (
                'CountryCode' => 'VIR',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '81.7',
            ),
            436 => 
            array (
                'CountryCode' => 'VIR',
                'Language' => 'French',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            437 => 
            array (
                'CountryCode' => 'VIR',
                'Language' => 'Spanish',
                'IsOfficial' => 'F',
                'Percentage' => '13.3',
            ),
            438 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Chinese',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            439 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Khmer',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            440 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Man',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            441 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Miao',
                'IsOfficial' => 'F',
                'Percentage' => '0.9',
            ),
            442 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Muong',
                'IsOfficial' => 'F',
                'Percentage' => '1.5',
            ),
            443 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Nung',
                'IsOfficial' => 'F',
                'Percentage' => '1.1',
            ),
            444 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Thai',
                'IsOfficial' => 'F',
                'Percentage' => '1.6',
            ),
            445 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Tho',
                'IsOfficial' => 'F',
                'Percentage' => '1.8',
            ),
            446 => 
            array (
                'CountryCode' => 'VNM',
                'Language' => 'Vietnamese',
                'IsOfficial' => 'T',
                'Percentage' => '86.8',
            ),
            447 => 
            array (
                'CountryCode' => 'VUT',
                'Language' => 'Bislama',
                'IsOfficial' => 'T',
                'Percentage' => '56.6',
            ),
            448 => 
            array (
                'CountryCode' => 'VUT',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '28.3',
            ),
            449 => 
            array (
                'CountryCode' => 'VUT',
                'Language' => 'French',
                'IsOfficial' => 'T',
                'Percentage' => '14.2',
            ),
            450 => 
            array (
                'CountryCode' => 'WLF',
                'Language' => 'Futuna',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            451 => 
            array (
                'CountryCode' => 'WLF',
                'Language' => 'Wallis',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            452 => 
            array (
                'CountryCode' => 'WSM',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '0.6',
            ),
            453 => 
            array (
                'CountryCode' => 'WSM',
                'Language' => 'Samoan',
                'IsOfficial' => 'T',
                'Percentage' => '47.5',
            ),
            454 => 
            array (
                'CountryCode' => 'WSM',
                'Language' => 'Samoan-English',
                'IsOfficial' => 'F',
                'Percentage' => '52.0',
            ),
            455 => 
            array (
                'CountryCode' => 'YEM',
                'Language' => 'Arabic',
                'IsOfficial' => 'T',
                'Percentage' => '99.6',
            ),
            456 => 
            array (
                'CountryCode' => 'YEM',
                'Language' => 'Soqutri',
                'IsOfficial' => 'F',
                'Percentage' => '0.0',
            ),
            457 => 
            array (
                'CountryCode' => 'YUG',
                'Language' => 'Albaniana',
                'IsOfficial' => 'F',
                'Percentage' => '16.5',
            ),
            458 => 
            array (
                'CountryCode' => 'YUG',
                'Language' => 'Hungarian',
                'IsOfficial' => 'F',
                'Percentage' => '3.4',
            ),
            459 => 
            array (
                'CountryCode' => 'YUG',
                'Language' => 'Macedonian',
                'IsOfficial' => 'F',
                'Percentage' => '0.5',
            ),
            460 => 
            array (
                'CountryCode' => 'YUG',
                'Language' => 'Romani',
                'IsOfficial' => 'F',
                'Percentage' => '1.4',
            ),
            461 => 
            array (
                'CountryCode' => 'YUG',
                'Language' => 'Serbo-Croatian',
                'IsOfficial' => 'T',
                'Percentage' => '75.2',
            ),
            462 => 
            array (
                'CountryCode' => 'YUG',
                'Language' => 'Slovak',
                'IsOfficial' => 'F',
                'Percentage' => '0.7',
            ),
            463 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Afrikaans',
                'IsOfficial' => 'T',
                'Percentage' => '14.3',
            ),
            464 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '8.5',
            ),
            465 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Ndebele',
                'IsOfficial' => 'F',
                'Percentage' => '1.5',
            ),
            466 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Northsotho',
                'IsOfficial' => 'F',
                'Percentage' => '9.1',
            ),
            467 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Southsotho',
                'IsOfficial' => 'F',
                'Percentage' => '7.6',
            ),
            468 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Swazi',
                'IsOfficial' => 'F',
                'Percentage' => '2.5',
            ),
            469 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Tsonga',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            470 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Tswana',
                'IsOfficial' => 'F',
                'Percentage' => '8.1',
            ),
            471 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Venda',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            472 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Xhosa',
                'IsOfficial' => 'T',
                'Percentage' => '17.7',
            ),
            473 => 
            array (
                'CountryCode' => 'ZAF',
                'Language' => 'Zulu',
                'IsOfficial' => 'T',
                'Percentage' => '22.7',
            ),
            474 => 
            array (
                'CountryCode' => 'ZMB',
                'Language' => 'Bemba',
                'IsOfficial' => 'F',
                'Percentage' => '29.7',
            ),
            475 => 
            array (
                'CountryCode' => 'ZMB',
                'Language' => 'Chewa',
                'IsOfficial' => 'F',
                'Percentage' => '5.7',
            ),
            476 => 
            array (
                'CountryCode' => 'ZMB',
                'Language' => 'Lozi',
                'IsOfficial' => 'F',
                'Percentage' => '6.4',
            ),
            477 => 
            array (
                'CountryCode' => 'ZMB',
                'Language' => 'Nsenga',
                'IsOfficial' => 'F',
                'Percentage' => '4.3',
            ),
            478 => 
            array (
                'CountryCode' => 'ZMB',
                'Language' => 'Nyanja',
                'IsOfficial' => 'F',
                'Percentage' => '7.8',
            ),
            479 => 
            array (
                'CountryCode' => 'ZMB',
                'Language' => 'Tongan',
                'IsOfficial' => 'F',
                'Percentage' => '11.0',
            ),
            480 => 
            array (
                'CountryCode' => 'ZWE',
                'Language' => 'English',
                'IsOfficial' => 'T',
                'Percentage' => '2.2',
            ),
            481 => 
            array (
                'CountryCode' => 'ZWE',
                'Language' => 'Ndebele',
                'IsOfficial' => 'F',
                'Percentage' => '16.2',
            ),
            482 => 
            array (
                'CountryCode' => 'ZWE',
                'Language' => 'Nyanja',
                'IsOfficial' => 'F',
                'Percentage' => '2.2',
            ),
            483 => 
            array (
                'CountryCode' => 'ZWE',
                'Language' => 'Shona',
                'IsOfficial' => 'F',
                'Percentage' => '72.1',
            ),
        ));
        
        
    }
}