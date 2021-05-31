<?php

namespace Database\Seeders;

use App\Models\medecins;
use Illuminate\Database\Seeder;

class MedecinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        medecins::create([
            'prenom' => 'kubilay',
            'nom' => 'kaplan',
            'numeroTel' => '012345678',
            'ville' => 'Lyon',
            'codePostal' => '69001',
            'adresse' => '17 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'jeremi',
            'nom' => 'loir',
            'numeroTel' => '012345678',
            'ville' => 'Paris',
            'codePostal' => '69001',
            'adresse' => '19 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'harry',
            'nom' => 'rui',
            'numeroTel' => '012345678',
            'ville' => 'Lille',
            'codePostal' => '69001',
            'adresse' => '13 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'emile',
            'nom' => 'menard',
            'numeroTel' => '012345678',
            'ville' => 'Lyon',
            'codePostal' => '69001',
            'adresse' => '18 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'antoine',
            'nom' => 'sara',
            'numeroTel' => '062345678',
            'ville' => 'Lyon',
            'codePostal' => '69001',
            'adresse' => '17 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'nicola',
            'nom' => 'zara',
            'numeroTel' => '012345678',
            'ville' => 'Villeurbanne',
            'codePostal' => '69001',
            'adresse' => '17 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'elise',
            'nom' => 'paz',
            'numeroTel' => '012345678',
            'ville' => 'Bretagne',
            'codePostal' => '69001',
            'adresse' => '12 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'benoit',
            'nom' => 'sigar',
            'numeroTel' => '012345678',
            'ville' => 'Marseille',
            'codePostal' => '69001',
            'adresse' => '11 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'tanguy',
            'nom' => 'klan',
            'numeroTel' => '012345678',
            'ville' => 'Lyon',
            'codePostal' => '69001',
            'adresse' => '17 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'clement',
            'nom' => 'bapl',
            'numeroTel' => '012345678',
            'ville' => 'Lyon',
            'codePostal' => '69001',
            'adresse' => '17 ur edesq',
        ]);
        medecins::create([
            'prenom' => 'ken',
            'nom' => 'kjaeger',
            'numeroTel' => '012345678',
            'ville' => 'Lyon',
            'codePostal' => '69001',
            'adresse' => '17 ur edesq',
        ]);
    }
}
