<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('fssm')->table('villes')->delete();
        $villes = array(
            array('id' => 1, 'name' => 'Marrakech'),
            array('id' => 2,'name' => 'Safi'),
            array('id' => 3,'name' => 'Essaouira'),
            array('id' => 4,'name' => 'Kelaa de Sraghna')
        );
        
        DB::connection('fssm')->table('villes')->insert($villes);

        DB::connection('fsjes')->table('villes')->delete();
        $villes = array(
            array('id' => 1, 'name' => 'Marrakech'),
            array('id' => 2,'name' => 'Safi'),
            array('id' => 3,'name' => 'Essaouira'),
            array('id' => 4,'name' => 'Kelaa de Sraghna')
        );
        
        DB::connection('fsjes')->table('villes')->insert($villes);

        DB::connection('flshm')->table('villes')->delete();
        $villes = array(
            array('id' => 1, 'name' => 'Marrakech'),
            array('id' => 2,'name' => 'Safi'),
            array('id' => 3,'name' => 'Essaouira'),
            array('id' => 4,'name' => 'Kelaa de Sraghna')
        );
        
        DB::connection('flshm')->table('villes')->insert($villes);
    }
}
