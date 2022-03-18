<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\invernadero;
class InvernaderoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seccion'=>$this->faker->buildingNumber(),
            'descripcion'=>$this->faker->name(),
            
        ];
    }
}
