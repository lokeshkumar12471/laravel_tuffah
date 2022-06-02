<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'department_id' => Department::pluck('id')[$this->faker->numberBetween(1, Department::count() - 1)],
            'name' => $this->faker->name(),
            'image' => 'one.jpg',
            'qualification' => $this->faker->randomElement(['Inter', 'SSC', 'Degree']),
            'profile' =>  $this->faker->paragraph(rand(2, 4)),
            'experience' => $this->faker->date('Y-m-d', '-2 Years')
        ];
    }
}
