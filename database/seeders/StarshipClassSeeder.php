<?php

namespace Database\Seeders;

use App\Models\StarshipClass;
use App\Models\Starship;
use Illuminate\Database\Seeder;

class StarshipClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StarshipClass::factory()
        ->count(3)
        ->hasStarship(5)
        ->create();

       
        
    }
}
