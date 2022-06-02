<?php

namespace Database\Seeders;

use App\Models\PackageList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PackageList::factory()->count(rand(200, 500))->create();
    }
}
