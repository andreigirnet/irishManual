<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 29,
            'course_name' => $this->faker->name(),
            'created_at' => $this->faker->dateTimeBetween('-4 week', 'now')->format('Y-m-d H:i:s'),
        ];
    }
}
