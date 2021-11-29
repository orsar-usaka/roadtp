<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'vehicle_id' => $this->faker->numberBetween(1,50),
            'route_id' => $this->faker->numberBetween(1,20),
            'take_off_time' => $this->faker->dateTimeBetween('-1 week', '+4 weeks'),
            'booked_seats' => $this->faker->numberBetween(1,4),
            'is_cancelled' => $this->faker->numberBetween(0,1),
            'is_postponed' => $this->faker->numberBetween(0,1),
            'is_unavailable' => $this->faker->numberBetween(0,1),
            'station_id' => $this->faker->numberBetween(1,30),
            'price' => $this->faker->numberBetween(500,15000),
        ];
    }
}
