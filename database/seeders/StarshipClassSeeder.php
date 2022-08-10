<?php

namespace Database\Seeders;

use App\Models\StarshipClass;
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
        ->create();

       
        
    }
}
