<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\invernadero;
class TemperaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'temperatura'=>$this->faker->buildingNumber(),
            'fecha'=>$this->faker->date(),
            'invernadero_id'=> invernadero::inRandomOrder()->first(),
        ];
    }
}
