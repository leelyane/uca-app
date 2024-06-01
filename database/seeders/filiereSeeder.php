<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('fssm')->table('filieres')->delete();
        $filieres = array(
            array('id'=>1, 'departement_id' => 1, 'name' => 'Licence d\'études fondamentales: Sciences Mathématiques et Informatique'),
            array('id'=>2, 'departement_id' => 1, 'name' => 'Licence professionnelle :Technologies et Programmation Web'),
            array('id'=>3, 'departement_id' => 1, 'name' => 'Licence professionnelle :Réseaux Sécurité et Systèmes Informatiques'),
            array('id'=>4, 'departement_id' => 1, 'name' => 'Licence Sciences Informatique (SI)'),
            array('id'=>5, 'departement_id' => 1, 'name' => 'Licence Intelligence Artificielle et Sciences des Données (IASD)'),
            array('id'=>6, 'departement_id' => 1, 'name' => 'Master spécialisé: Sciences de Données (SD)'),
            array('id'=>7, 'departement_id' => 1, 'name' => 'Master spécialisé : Ingénierie des Systèmes d\'information'),
            array('id'=>8, 'departement_id' => 1, 'name' => 'Licence Networking, Système et Cybersécurité (NSC)'),
            array('id'=>9, 'departement_id' => 1, 'name' => 'Ingénierie des Systèmes d\'Information (ISI)'),

            array('id'=>10, 'departement_id' => 2, 'name' => 'Licence d\'Etudes fondamentales : Sciences Mathématiques et Applications'),
            array('id'=>11, 'departement_id' => 2, 'name' => 'Licence Sciences Mathématiques et Applications (SMA)'),
            array('id'=>12, 'departement_id' => 2, 'name' => 'Licence Aide à la Décision en Sciences des Données (ADSD)'),
            array('id'=>13, 'departement_id' => 2, 'name' => 'Matser : Mathématiques et applications'),

            array('id'=>14, 'departement_id' => 3, 'name' => 'Licence professionnelle : Electronics Optics for Embedded Systèmes'),
            array('id'=>15, 'departement_id' => 3, 'name' => 'Licence professionnelle : Electronique et Optique pour les Systèmes Embarqués'),
            array('id'=>16, 'departement_id' => 3, 'name' => 'Licence professionnelle : Optique et Optométrie'),
            array('id'=>17, 'departement_id' => 3, 'name' => 'Licence professionnelle : Electrotechnique et Electronique Industrielle'),
            array('id'=>18, 'departement_id' => 3, 'name' => 'Licence professionnelle : Technologie et coordination dans le Bâtiment et les Travaux Publics'),
            array('id'=>19, 'departement_id' => 3, 'name' => 'Master : Contrôle Informatique Industrielle Systèmes et Signaux'),
            array('id'=>20, 'departement_id' => 3, 'name' => 'Licence d\'études fondamentales : Sciences de la matière physique'),
            array('id'=>21, 'departement_id' => 3, 'name' => 'Licence professionnelle : Efficacité Energétique et Energies Renouvelables'),
            array('id'=>22, 'departement_id' => 3, 'name' => 'Licence professionnelle : Maintenance des Installations et Exploitation des Usines et Réseaux d’Eau, LP-MIEURE'),
            array('id'=>23, 'departement_id' => 3, 'name' => 'Licence : Physique Moderne (PHM)'),
            array('id'=>24, 'departement_id' => 3, 'name' => 'Licence : Energétique et Energies Renouvelables (EER)'),
            array('id'=>25, 'departement_id' => 3, 'name' => 'Licence : Electronique et Automatique pour les Systèmes Embarqués (EASE)'),
            array('id'=>26, 'departement_id' => 3, 'name' => 'Licence : Maintenance des Installations et Exploitation des Usines et Réseaux d’Eau (MIEURE)'),
            array('id'=>27, 'departement_id' => 3, 'name' => 'Licence : Optique et Optométrie (OO)'),
            array('id'=>28, 'departement_id' => 3, 'name' => 'Filière d\'Excellence "Ingénierie et Conduite des Bâtiments et Travaux Publics« IC BTP'),
            array('id'=>29, 'departement_id' => 3, 'name' => 'Filière d\'Excellence'),
            array('id'=>30, 'departement_id' => 3, 'name' => 'Master : Matériaux et Energies Renouvelables (MER)'),
            array('id'=>31, 'departement_id' => 3, 'name' => 'Master : Energétique et Environnement (EE)'),

            array('id'=>32, 'departement_id' => 5, 'name' => 'Licence d\'études fondamentales : Sciences de la vie'),
            array('id'=>33, 'departement_id' => 5, 'name' => 'Licence professionnelle : Sciences et Technologies de l’Assainissement des Déchets Liquides et Solides'),
            array('id'=>34, 'departement_id' => 5, 'name' => 'Licence Biotechnologie Végétale et Agrosciences (BVA)'),
            array('id'=>35, 'departement_id' => 5, 'name' => 'Licence : Sciences Biologiques Appliquées à la Santé (SBAS)'),
            array('id'=>36, 'departement_id' => 5, 'name' => 'Valorisation des Productions Animales et Zootechnie (VPAZ)'),
            array('id'=>37, 'departement_id' => 5, 'name' => 'Filière d\'Excellence "VALDEC" Technologies de Traitement et Valorisation des Déchets Liquides et Solides'),
            array('id'=>38, 'departement_id' => 5, 'name' => 'Master : Biodiversité, Changements Climatiques & Développement Durable (BioClimaDD)'),
            array('id'=>39, 'departement_id' => 5, 'name' => 'Master : Biotechnologies Microbiennes et Agrosciences (BIOMAC)'),


        );
        DB::connection('fssm')->table('filieres')->insert($filieres);

        DB::connection('fsjes')->table('filieres')->delete();
        $filieres = array(
            array('id'=>1, 'departement_id' => 1, 'name' => 'قانون المال والأعمال'),
            array('id'=>2, 'departement_id' => 1, 'name' => 'الدراسات المدنية والتحولات الاقتصادية'),
            array('id'=>3, 'departement_id' => 1, 'name' => 'المعاملات الرقمية والأمن السيبراني'),
            array('id'=>4, 'departement_id' => 1, 'name' => 'المهن القانونية والقضائية'),
            array('id'=>5, 'departement_id' => 1, 'name' => 'Droit financier et des affaires'),

            array('id'=>6, 'departement_id' => 2, 'name' => 'الدراسات السياسية والدولية'),
            array('id'=>7, 'departement_id' => 2, 'name' => 'Études politiques et internationales'),
            array('id'=>8, 'departement_id' => 2, 'name' => 'الدراسات الإدارية والتدبير العمومي'),

            array('id'=>9, 'departement_id' => 3, 'name' => 'International Management'),
            array('id'=>10, 'departement_id' => 3, 'name' => 'Logistique et Supply Chain Management'),
            array('id'=>11, 'departement_id' => 3, 'name' => 'Comptabilité fiscalité finance'),
            array('id'=>12, 'departement_id' => 3, 'name' => 'Management des entreprises'),
            array('id'=>13, 'departement_id' => 3, 'name' => 'Marketing et commerce'),

            array('id'=>14, 'departement_id' => 4, 'name' => 'Finance et banque'),
            array('id'=>15, 'departement_id' => 4, 'name' => 'Économie appliquée'),

            array('id'=>16, 'departement_id' => 5, 'name' => 'Droit'),
            array('id'=>17, 'departement_id' => 6, 'name' => 'Économie & gestion'),

        );
        DB::connection('fsjes')->table('filieres')->insert($filieres);

        DB::connection('flshm')->table('filieres')->delete();
        $filieres = array(
            array('id'=>1, 'departement_id' => 1, 'name' => 'Licence : الدراسات العربية/ الدراسات الأدبية'),
            array('id'=>2, 'departement_id' => 1, 'name' => 'Licence : الدراسات العربية/ الدراسات اللسانية'),
            array('id'=>3, 'departement_id' => 1, 'name' => 'Licence Fondamentale: الدراسات العربية'),

        );
        DB::connection('flshm')->table('filieres')->insert($filieres);
    }
}
