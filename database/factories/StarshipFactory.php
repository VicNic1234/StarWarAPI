<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StarshipClass;
use App\Models\Starship;

class StarshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
        return [
            'name' => $this->faker->name(),
            'length' => $this->faker->numberBetween(200, 20000),
            'crew_size' => $this->faker->numberBetween(200, 234),
            'cost' => $this->faker->numberBetween(200, 20000),
            'color' => $this->faker->colorName(),
            'class' => StarshipClass::factory()
            
            

        ];
    }
}
