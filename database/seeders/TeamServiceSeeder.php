<?php

namespace Database\Seeders;

use App\Models\TeamService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamService::factory()->count(rand(200, 500))->create();
    }
}
