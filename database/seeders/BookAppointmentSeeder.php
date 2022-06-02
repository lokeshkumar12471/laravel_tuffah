<?php

namespace Database\Seeders;

use App\Models\BookAppointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookAppointment::factory()->count(rand(200, 500))->create();
    }
}
