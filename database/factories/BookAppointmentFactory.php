<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookAppointment>
 */
class BookAppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data = ["Male", "FeMale"];
        $gender = $data[array_rand($data)];

        return [
            'name' => $this->faker->name(),
            'appointment_date' => $this->faker->dateTimeBetween('-5 months', '+6 months')->format('Y-m-d'),
            'appointment_time' => $this->faker->dateTimeBetween('-8 hours', 'now')->format('H:i:s'),
            'phone' => rand(7000000000, 9000000000),
            'email' => $this->faker->safeEmail(),
            'gender' => $gender,
            'age' => rand(2, 50),
            'address' => $this->faker->address(),
            'team_id' => Team::pluck('id')[$this->faker->numberBetween(1, Team::count() - 1)],
            'previous_record' => rand(0, 1),
            'previous_record_description' => $this->faker->paragraph(rand(2, 4))
        ];
    }
}
