<?php
namespace Flogti\SpanishCities\Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Álava',
                'community_id' => 16,
                'capital_id' => 46,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albacete',
                'community_id' => 8,
                'capital_id' => 54,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Alicante',
                'community_id' => 10,
                'capital_id' => 152,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Almería',
                'community_id' => 1,
                'capital_id' => 292,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ávila',
                'community_id' => 7,
                'capital_id' => 395,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Badajoz',
                'community_id' => 11,
                'capital_id' => 644,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Illes Balears',
                'community_id' => 4,
                'capital_id' => 836,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Barcelona',
                'community_id' => 9,
                'capital_id' => 881,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Burgos',
                'community_id' => 7,
                'capital_id' => 1220,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Cáceres',
                'community_id' => 11,
                'capital_id' => 1580,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Cádiz',
                'community_id' => 1,
                'capital_id' => 1776,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Castellón',
                'community_id' => 10,
                'capital_id' => 1844,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ciudad Real',
                'community_id' => 8,
                'capital_id' => 1978,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Córdoba',
                'community_id' => 1,
                'capital_id' => 2065,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'A Coruña',
                'community_id' => 12,
                'capital_id' => 2150,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Cuenca',
                'community_id' => 8,
                'capital_id' => 2285,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Girona',
                'community_id' => 9,
                'capital_id' => 2526,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Granada',
                'community_id' => 1,
                'capital_id' => 2747,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Guadalajara',
                'community_id' => 8,
                'capital_id' => 2947,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Guipúzcoa',
                'community_id' => 16,
                'capital_id' => 3159,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Huelva',
                'community_id' => 1,
                'capital_id' => 3257,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Huesca',
                'community_id' => 2,
                'capital_id' => 3396,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Jaén',
                'community_id' => 1,
                'capital_id' => 3545,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'León',
                'community_id' => 7,
                'capital_id' => 3676,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Lleida',
                'community_id' => 9,
                'capital_id' => 3918,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'La Rioja',
                'community_id' => 17,
                'capital_id' => 4124,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Lugo',
                'community_id' => 12,
                'capital_id' => 4238,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Madrid',
                'community_id' => 13,
                'capital_id' => 4356,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Málaga',
                'community_id' => 1,
                'capital_id' => 4523,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Murcia',
                'community_id' => 14,
                'capital_id' => 4588,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Navarra',
                'community_id' => 15,
                'capital_id' => 4815,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Ourense',
                'community_id' => 12,
                'capital_id' => 4925,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Asturias',
                'community_id' => 3,
                'capital_id' => 5009,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Palencia',
                'community_id' => 7,
                'capital_id' => 5137,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Las Palmas',
                'community_id' => 5,
                'capital_id' => 5252,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Pontevedra',
                'community_id' => 12,
                'capital_id' => 5312,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Salamanca',
                'community_id' => 7,
                'capital_id' => 5588,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Santa Cruz de Tenerife',
                'community_id' => 5,
                'capital_id' => 5732,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Cantabria',
                'community_id' => 6,
                'capital_id' => 5823,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Segovia',
                'community_id' => 7,
                'capital_id' => 6024,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Sevilla',
                'community_id' => 1,
                'capital_id' => 6152,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Soria',
                'community_id' => 7,
                'capital_id' => 6307,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Tarragona',
                'community_id' => 9,
                'capital_id' => 6499,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Teruel',
                'community_id' => 2,
                'capital_id' => 6721,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Toledo',
                'community_id' => 8,
                'capital_id' => 6934,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Valencia',
                'community_id' => 10,
                'capital_id' => 7219,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Valladolid',
                'community_id' => 7,
                'capital_id' => 7415,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Vizcaya',
                'community_id' => 16,
                'capital_id' => 7489,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Zamora',
                'community_id' => 7,
                'capital_id' => 7821,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Zaragoza',
                'community_id' => 2,
                'capital_id' => 8113,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Ceuta',
                'community_id' => 18,
                'capital_id' => 8115,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Melilla',
                'community_id' => 19,
                'capital_id' => 8116,
            ),
        ));
        
        
    }
}