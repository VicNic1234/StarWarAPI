<?php

namespace Database\Seeders;

use App\Models\Starship;
use App\Models\StarshipClass;
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
        // \App\Models\User::factory(10)->create();
        

        $this->call([
            StarshipClassSeeder::class
        ]);

        
    }
}
