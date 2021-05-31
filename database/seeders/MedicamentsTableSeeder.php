<?php

namespace Database\Seeders;

use App\Models\medicaments;
use Illuminate\Database\Seeder;

class MedicamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        medicaments::create([
            'denomination' => 'ABACAVIR',
            'slug' => 'ab',
            'description' => 'ABACAVIR MYLAN 300 mg, comprimé pelliculé sécable contient une substance active :
            l’abacavir. L’abacavir appartient à une classe de médicaments antirétroviraux appelés analogues nucléosidiques inhibiteurs de la transcriptase inverse (INTI).',
            'composition' => ' abacavir  300 mg',
            'price' => '25',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'BACLOFENE',
            'slug' => 'bac',
            'description' => 'BACLOFENE AGUETTANT 0,05 mg/ml, solution injectable pour voie intrathécale en ampoule appartient à une famille de médicaments appelés relaxants musculaires. BACLOFENE AGUETTANT 0,05 mg/ml, solution injectable pour voie
            intrathécale en ampoule est administré par injection directement dans le liquide rachidien (injection intrathécale) afin de soulager la rigidité musculaire sévère (spasticité).',
            'composition' => 'baclofène  0,05 mg',
            'price' => '25',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'CABERGOLINE',
            'slug' => 'cab',
            'description' => 'CABERGOLINE TEVA appartient à un groupe de médicaments appelés inhibiteurs de la prolactine. CABERGOLINE TEVA empêche la lactation (sécrétion de lait) en diminuant le taux d’une hormone appelée prolactine',
            'composition' => 'cabergoline  0,5 mg',
            'price' => '15',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'DACOGEN',
            'slug' => 'dac',
            'description' => 'prise en charge par la solidarité nationale dans l’indication « traitement des patients adultes atteints d’une leucémie aiguë myéloïde (LAM) selon la classification de l’Organisation Mondiale de la Santé (OMS), nouvellement diagnostiquée, de novo ou secondaire, et non candidats à une chimiothérapie d’induction standard. »',
            'composition' => 'décitabine  50 mg',
            'price' => '15',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'FAMOTIDINE',
            'slug' => 'fam',
            'description' => 'dans le traitement un syndrome de Zollinger-Ellison ulcères récidivants du duodénum dus à un excès de sécrétion du pancréas',
            'composition' => 'famotidine  20 mg',
            'price' => '15',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'ABASAGLAR',
            'slug' => 'aba',
            'description' => 'Le service médical rendu par ABASAGLAR 100 unités/ml, solution injectable en stylo prérempli jetable est important dans l’indication de l’AMM.',
            'composition' => ' insuline glargine   100 unités',
            'price' => '15',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'TASAGLAR',
            'slug' => 'ata',
            'description' => 'Le service médical rendu par ABASAGLAR 100 unités/ml, solution injectable en stylo prérempli jetable est important dans l’indication de l’AMM.',
            'composition' => ' insuline glargine   100 unités',
            'price' => '15',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        medicaments::create([
            'denomination' => 'KASAAR',
            'slug' => 'kba',
            'description' => 'Le service médical rendu par ABASAGLAR 100 unités/ml, solution injectable en stylo prérempli jetable est important dans l’indication de l’AMM.',
            'composition' => ' insuline glargine   100 unités',
            'price' => '15',
            'image' => 'http://loremflickr.com/200/250/medicament'
        ])->categories()->attach([
            rand(1,4),
            rand(1,4)
        ]);

    }
}
