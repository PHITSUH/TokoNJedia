<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImages>
 */
class ProductImagesFactory extends Factory
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
            'image' => 'https://source.unsplash.com/random'
        ];
    }
}
