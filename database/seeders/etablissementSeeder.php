<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('fssm')->table('etablissements')->delete();
        $etablissements = array(
            array('id'=>1, 'ville_id' => 1, 'name' => 'FSS-Marrakech'),          
        );
        DB::connection('fssm')->table('etablissements')->insert($etablissements);

        DB::connection('fsjes')->table('etablissements')->delete();
        $etablissements = array(
            array('id'=>1, 'ville_id' => 1, 'name' => 'FSJES-Marrakech'),
            array('id'=>2, 'ville_id' => 4, 'name' => 'FSJES-Kelaa'),
        );
        DB::connection('fsjes')->table('etablissements')->insert($etablissements);

        DB::connection('flshm')->table('etablissements')->delete();
        $etablissements = array(
            array('id'=>1, 'ville_id' => 1, 'name' => 'FLSH-Marrakech'),
        );
        DB::connection('flshm')->table('etablissements')->insert($etablissements);
    }
}
