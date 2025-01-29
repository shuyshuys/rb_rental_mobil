<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\Customer;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'car_id' => Car::factory(),
            'invoice_no' => $this->faker->word,
            'rent_date' => $this->faker->dateTime(),
            'back_date' => $this->faker->dateTime(),
            'return_date' => $this->faker->dateTime(),
            'price' => $this->faker->numberBetween(-10000, 10000),
            'amount' => $this->faker->numberBetween(-10000, 10000),
            'penalty' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->word,
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
