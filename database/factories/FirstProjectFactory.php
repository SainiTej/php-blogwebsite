<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FirstProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blogname' => $this->faker->sentence(), 
            'blogdescription' => $this->faker->paragraph(30),
        ];
    }
}
