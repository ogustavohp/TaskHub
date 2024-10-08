<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
  public function definition(): array
  {
    return [
      'name' => fake()->name(),
      'email' => fake()->unique()->safeEmail(),
      'rating' => fake()->randomElement([1, 2, 3, 4, 5]),
      'avatar' => 'https://avatar.iran.liara.run/public',
    ];
  }
}
