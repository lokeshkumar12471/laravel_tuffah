<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackageList>
 */
class PackageListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'package_id' => Package::pluck('id')[$this->faker->numberBetween(1, Package::count() - 1)],
            'name' => $this->faker->name(),
            'image' => 'one.jpg',
            'list' => 'Learn;how;to;take;the;text;in;one;or;more;cells,;and;split;it;out;across;multiple;cells;by;using;Excel;functions.;This;is;called;parsing,;and;is;the'
        ];
    }
}
