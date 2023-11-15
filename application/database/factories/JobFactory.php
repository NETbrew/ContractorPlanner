<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'location' => $this->faker->city,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'squaremeters' => $this->faker->randomFloat(2, 50, 200),
            'type' => $this->faker->word,
            'date' => $this->faker->date(),
            'remark' => $this->faker->paragraph,
        ];
    }
}
