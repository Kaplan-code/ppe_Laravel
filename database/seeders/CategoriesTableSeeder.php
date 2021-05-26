<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categories::create([
            'nom' => 'Doliprane',
            'slug' => 'doliprane'
        ]);

        categories::create([
            'nom' => 'Efervesent',
            'slug' => 'efervesent'
        ]);
    }
}
