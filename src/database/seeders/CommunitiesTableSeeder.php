<?php
namespace Flogti\SpanishCities\Database\Seeders;

use Illuminate\Database\Seeder;

class CommunitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('communities')->delete();
        
        \DB::table('communities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Andalucía',
                'capital_id' => 6152,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aragón',
                'capital_id' => 8113,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Principado de Asturias',
                'capital_id' => 5009,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Illes Balears',
                'capital_id' => 836,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Canarias',
                'capital_id' => 5252,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cantabria',
                'capital_id' => 5823,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Castilla y León',
                'capital_id' => 7415,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Castilla - La Mancha',
                'capital_id' => 6934,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Cataluña',
                'capital_id' => 881,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Comunitat Valenciana',
                'capital_id' => 7219,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Extremadura',
                'capital_id' => 712,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Galicia',
                'capital_id' => 2198,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Comunidad de Madrid ',
                'capital_id' => 4356,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Región de Murcia',
                'capital_id' => 4588,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Comunidad Foral de Navarra',
                'capital_id' => 4815,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'País Vasco',
                'capital_id' => 46,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'La Rioja',
                'capital_id' => 4124,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Ceuta',
                'capital_id' => 8115,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Melilla',
                'capital_id' => 8116,
            ),
        ));
        
        
    }
}