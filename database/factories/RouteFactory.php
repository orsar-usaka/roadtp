<?php

namespace Database\Factories;

use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RouteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Route::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => 'Nasarawa - Kaduna',
            'location_name' => 'Nasarawa',
            'destination_name' => 'Kaduna',
            'location_lga_id' => $this->faker->numberBetween(526, 538),
            'destination_lga_id' => $this->faker->numberBetween(347, 369),
            'location_state_id' => 26,
            'destination_state_id' => 19,
            'distance' => $this->faker->numberBetween(100,250),
            'fuel_needed' => $this->faker->numberBetween(50,100),
            'description' => $this->faker->sentence(10),
        ];
    }
}
