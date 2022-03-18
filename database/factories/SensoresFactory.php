<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\invernadero;
class SensoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invernadero_id' => invernadero::inRandomOrder()->first(),
        ];
    }
}
