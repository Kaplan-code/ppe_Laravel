<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'kubilay',
            'email' => 'visiteur@hot.fr',
            'password' => bcrypt('12345678'),
            'role_id' => '1',
        ]);

        User::create([
            'name' => 'jeremi',
            'email' => 'delegue@hot.fr',
            'password' => bcrypt('12345678'),
            'role_id' => '2',
        ]);
    }
}
