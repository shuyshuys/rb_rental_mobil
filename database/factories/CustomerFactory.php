<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'nik' => $this->faker->word,
            'sex' => $this->faker->word,
            'address' => $this->faker->text,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
