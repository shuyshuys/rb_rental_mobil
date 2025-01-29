<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\Manufacture;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manufacture_id' => Manufacture::factory(),
            'name' => $this->faker->name,
            'license_number' => $this->faker->word,
            'color' => $this->faker->word,
            'year' => $this->faker->word,
            'status' => $this->faker->word,
            'price' => $this->faker->numberBetween(-10000, 10000),
            'penalty' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
