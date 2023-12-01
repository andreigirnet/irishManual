<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'paid'=> fake()->randomFloat(1, 1, 50),
            'quantity'=> round(fake()->randomFloat(1,1,50)),
            'product_name'=>fake()->name(),
            'user_id'=>29,
            'created_at' => $this->faker->dateTimeBetween('-2 week', 'now')->format('Y-m-d H:i:s'),
        ];
    }
}
