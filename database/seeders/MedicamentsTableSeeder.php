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
            'denomination' => 'lo',
            'slug' => 'lo',
            'description' => 'lo',
            'composition' => 'lo',
            'price' => '25',
            'image' => 'http://dummyimage.com/200x250.bmp/dddddd/000000'
        ])->categories()->attach([
            rand(1,2),
            rand(1,2)
        ]);
        medicaments::create([
            'denomination' => 'zzz',
            'slug' => 'zzz',
            'description' => 'zzz',
            'composition' => 'zzz',
            'price' => '25',
            'image' => 'http://dummyimage.com/200x250.bmp/dddddd/000000'
        ])->categories()->attach([
            rand(1,2),
            rand(1,2)
        ]);
        medicaments::create([
            'denomination' => 'aaa',
            'slug' => 'aaa',
            'description' => 'aaa',
            'composition' => 'aaa',
            'price' => '25',
            'image' => 'http://dummyimage.com/200x250.bmp/dddddd/000000'
        ])->categories()->attach([
            rand(1,2),
            rand(1,2)
        ]);

    }
}
