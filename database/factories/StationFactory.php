<?php

namespace Database\Factories;

use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

class StationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Station::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'address' => $this->faker->address(),
            'lga_id' => $this->faker->numberBetween(526, 538),
            'state_id' => 26,
            'description' => $this->faker->sentence(5),
        ];
    }
}
