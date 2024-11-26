<?php

namespace Database\Factories;

use App\Models\UserData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchants>
 */
class MerchantsFactory extends Factory
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
            'user_id' => UserData::inRandomOrder()->value('id'),
            'name' => $this->faker->name,
            'image' => 'https://source.unsplash.com/random',
            'banner_image' => 'https://source.unsplash.com/random',
            'description' => $this->faker->text(50),
            'catch_phrase' => $this->faker->sentence(10),
            'full_description' => $this->faker->paragraphs(18, true),
            'phone' => $this->faker->phoneNumber,
            'process_time' => $this->faker->time,
            'operational_time' => $this->faker->time,
            'status' => $this->faker->randomElement(['Married', 'Unmarried'])

        ];
    }
}
