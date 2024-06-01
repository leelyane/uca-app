<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('fssm')->table('departements')->delete();
        $departements = array(
            array('id'=>1, 'etablissement_id' => 1, 'name' => 'FSSM-Informatique'),
            array('id'=>2, 'etablissement_id' => 1, 'name' => 'FSSM-Mathematiques'),
            array('id'=>3, 'etablissement_id' => 1, 'name' => 'FSSM-Physique'),
            array('id'=>4, 'etablissement_id' => 1, 'name' => 'FSSM-Chimie'),
            array('id'=>5, 'etablissement_id' => 1, 'name' => 'FSSM-Biologie'),
            array('id'=>6, 'etablissement_id' => 1, 'name' => 'FSSM-Geologie'),
            array('id'=>7, 'etablissement_id' => 1, 'name' => 'FSSM-Humanities'),
        );
        DB::connection('fssm')->table('departements')->insert($departements);

        DB::connection('fsjes')->table('departements')->delete();
        $departements = array(
            array('id'=>1, 'etablissement_id' => 1, 'name' => 'FSJESM-Droit prive'),
            array('id'=>2, 'etablissement_id' => 1, 'name' => 'FSJESM-Droit public'),
            array('id'=>3, 'etablissement_id' => 1, 'name' => 'FSJESM-Sciences économiques'),
            array('id'=>4, 'etablissement_id' => 1, 'name' => 'FSJESM-Sciences de gestion'),

            array('id'=>5, 'etablissement_id' => 2, 'name' => 'FSJESK-Droit prive'),
            array('id'=>6, 'etablissement_id' => 2, 'name' => 'FSJESK-Sciences économiques & gestion'),
        );
        DB::connection('fsjes')->table('departements')->insert($departements);

        DB::connection('flshm')->table('departements')->delete();
        $departements = array(
            array('id'=>1, 'etablissement_id' => 1, 'name' => 'FLSHM-Langue et Littérature Arabes'),
            array('id'=>2, 'etablissement_id' => 1, 'name' => 'FLSHM-Langue et Littérature Françaises'),
            array('id'=>3, 'etablissement_id' => 1, 'name' => 'FLSHM-Langue et Littérature Espagnoles'),
            array('id'=>4, 'etablissement_id' => 1, 'name' => 'FLSHM-Langue et Littérature Anglaises'),
            array('id'=>5, 'etablissement_id' => 1, 'name' => 'FLSHM-Histoire'),
            array('id'=>6, 'etablissement_id' => 1, 'name' => 'FLSHM-Géographique'),
            array('id'=>7, 'etablissement_id' => 1, 'name' => 'FLSHM-Études Islamiques'),
            array('id'=>8, 'etablissement_id' => 1, 'name' => 'FLSHM-Phylosophie & Psychologie'),
            array('id'=>9, 'etablissement_id' => 1, 'name' => 'FLSHM-Sociologie'),
        );
        DB::connection('flshm')->table('departements')->insert($departements);
    }
}
