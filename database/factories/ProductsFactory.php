<?php

namespace Database\Factories;

use App\Models\Merchants;
use App\Models\ProductCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
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
            'name' => $this->faker->words(1, true),
            'description' => $this->faker->text,
            'condition' => $this->faker->randomElement(['New', 'Used']),
            'merchant_id' => Merchants::inRandomOrder()->value('id'),
            'product_category_id' => ProductCategories::inRandomOrder()->value('id'),
        ];
    }
}
