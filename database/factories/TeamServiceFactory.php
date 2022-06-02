<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamService>
 */
class TeamServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'team_id' => Team::pluck('id')[$this->faker->numberBetween(1, Team::count() - 1)],
            'service_id' => Service::pluck('id')[$this->faker->numberBetween(1, Service::count() - 1)]
        ];
    }
}
