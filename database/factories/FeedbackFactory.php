<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data = ["IP", "OP"];
        $type = $data[array_rand($data)];

        return [
            'type' => $type,
            'name' => $this->faker->name(),
            'admission_number' => rand(7000000, 9000000),
            'email' => $this->faker->safeEmail(),
            'phone' => rand(7000000000, 9000000000),
            'how' => $this->faker->paragraph(rand(1, 2)),
            'initial_response_rating' => rand(1, 5),
            'initial_response_text' => $this->faker->paragraph(rand(1, 2)),
            'explanation_of_treatment_rating' => rand(1, 5),
            'explanation_of_treatment_text' => $this->faker->paragraph(rand(1, 2)),
            'cost_of_treatment_rating' => rand(1, 5),
            'cost_of_treatment_text' => $this->faker->paragraph(rand(1, 2)),
            'reception_rating' => rand(1, 5),
            'reception_text' => $this->faker->paragraph(rand(1, 2)),
            'dmo_rating' => rand(1, 5),
            'dmo_text' => $this->faker->paragraph(rand(1, 2)),
            'nurse_rating' => rand(1, 5),
            'nurse_text' => $this->faker->paragraph(rand(1, 2)),
            'house_keeping_rating' => rand(1, 5),
            'house_keeping_text' => $this->faker->paragraph(rand(1, 2)),
            'satisfaction_of_treatment_rating' => rand(1, 5),
            'satisfaction_of_treatment_text' => $this->faker->paragraph(rand(1, 2)),
            'any_other_feedback' => $this->faker->paragraph(rand(1, 2))
        ];
    }
}
