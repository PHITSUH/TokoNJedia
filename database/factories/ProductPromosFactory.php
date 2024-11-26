<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\Promos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPromos>
 */
class ProductPromosFactory extends Factory
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
            'promo_id' => Promos::inRandomOrder()->value('id'),
            'product_id' => Products::inRandomOrder()->value('id'),
            'discount' => $this->faker->numberBetween(25, 40)
        ];
    }
}
