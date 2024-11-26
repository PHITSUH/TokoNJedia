<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariants>
 */
class ProductVariantsFactory extends Factory
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
            'product_id' => Products::inRandomOrder()->value('id'),
            'name' => $this->faker->word,
            'price' => $this->faker->numberBetween(1000, 100000),
            'stock' => $this->faker->numberBetween(0,20),
        ];
    }
}
