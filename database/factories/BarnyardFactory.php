<?php

namespace Database\Factories;

use App\Models\Barnyard;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\[Barnyard]>
 */
class BarnyardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barnyard::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => Str::random(10),
            'name' => fake()->bothify('Corral ##??'),
            'barnyard_type_id' => fake()->numberBetween($min = 1, $max = 2)
        ];
    }
}
