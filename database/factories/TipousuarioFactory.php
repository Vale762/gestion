<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipousuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
                'rol'=>$this->faker->name(),
            ];
        
    }
}
