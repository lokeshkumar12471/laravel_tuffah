<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUs>
 */
class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'contact_number' => rand(7000000000, 9000000000),
            'address' => $this->faker->address(),
            'questions' => $this->faker->paragraph(rand(1, 2)) . '?'
        ];
    }
}
