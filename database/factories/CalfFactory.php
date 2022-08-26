<?php

namespace Database\Factories;

use App\Models\Barnyard;
use App\Models\Calf;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\[Calf]>
 */
class CalfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Calf::class;

    /**
     * Define the model's default state.
     *
     * @return array<string => 'asdd', mixed>
     */
    public function definition()
    {
        $generalBarnyards = Barnyard::where('barnyard_type_id', 1)->pluck('id');
        return [
            'slug' => Str::random(10),
            'date' => fake()->dateTimeThisYear(),
            'weight' => fake()->numberBetween($min = 14, $max = 26),
            'muscle_color' => fake()->numberBetween($min = 1, $max = 7),
            'marbling' => fake()->numberBetween($min = 1, $max = 5),
            'cost' => fake()->numberBetween($min = 10000, $max = 30000),
            'name' => fake()->text($maxNbChars = 20),
            'description' => fake()->text($maxNbChars = 50),
            'provider_id' => fake()->numberBetween($min = 1, $max = 20),
            'barnyard_id' => $generalBarnyards->random()
        ];
    }
}
