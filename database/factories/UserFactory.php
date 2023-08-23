<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition(): array
    {

        return [

            'name' => $this->faker->company,

            'password' => $this->faker->company,

            'email' => $this->faker->company,

            'address' => $this->faker->company,

            'rol' => $this->faker->company,

            'wallet' => $this->faker->numberBetween($min = 10, $max = 100),

        ];

    }
}
