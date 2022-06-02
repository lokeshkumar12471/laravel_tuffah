<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $paragraphs = $this->faker->paragraphs(6, false);
        $title = $this->faker->realText(50);
        $description = "<h1>{$title}</h1>";
        foreach ($paragraphs as $para) {
            $description .= "<p>{$para}</p>";
        }

        return [
            'department_id' => Department::pluck('id')[$this->faker->numberBetween(1, Department::count() - 1)],
            'team_id' => Team::pluck('id')[$this->faker->numberBetween(1, Team::count() - 1)],
            'title' => $this->faker->realText(50),
            'image' => 'one.jpg',
            'tags' => 'Blog,One',
            'excerpt' => $this->faker->paragraph(rand(2, 4)),
            'description' => $description,
            'clicks' => rand(0, 50)
        ];
    }
}
