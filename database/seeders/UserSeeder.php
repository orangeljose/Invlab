<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');

        User::Create([
            'name' => 'Logistica',
            'email' => 'logistica@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Logistica');

        User::Create([
            'name' => 'Produccion',
            'email' => 'produccion@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Produccion');

        User::factory(9)->create();
    }
}
