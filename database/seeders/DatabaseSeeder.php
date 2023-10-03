<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();
        \App\Models\Article::factory(20)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
