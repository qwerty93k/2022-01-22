<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(20),
            'difficulty' => $this->faker->numberBetween(1, 10),
            'school_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
