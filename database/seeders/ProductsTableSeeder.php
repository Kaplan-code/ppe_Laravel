<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use App\Models\medicaments;

class  ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::cre;

        for ($i=0; $i<30; $i++){
            medicaments::create([
                'title' => $faker->sentence(15),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(10),
                'description' => $faker->text,
                'price' => $faker->numberBetween(15,300) * 100,
                'image' => 'https://via.placeholder.com/200x250'
            ]);
        }
    }
}
