<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserData;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserData>
 */
class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt($this->faker->password),
            'phone' => $this->faker->phoneNumber,
            'dob' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'google_id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'image' => 'https://source.unsplash.com/random',
        ];
    }
}
