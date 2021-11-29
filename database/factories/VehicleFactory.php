<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'model' => $this->faker->numerify('BTS-####'),
            'plate_no' => $this->faker->numerify('TL-####'),
            'vehicle_no' => $this->faker->numerify('BEN-##-####'),
            'seat_capacity' => $this->faker->numberBetween(5,15),
            'fuel_capacity' => $this->faker->numberBetween(50,100),
            'description' => $this->faker->sentence(6),
        ];
    }
}
