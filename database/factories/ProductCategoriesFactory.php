<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategories>
 */
class ProductCategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        static $categories = [
            'Electronics',
            'Clothing',
            'Home and Garden',
            'Books',
            'Toys',
            'Sports and Outdoors',
            'Beauty and Personal Care',
            'Automotive',
            'Health and Wellness',
            'Office Supplies',
            'Pet Supplies',
            'Jewelry',
            'Food and Grocery',
            'Home Improvement',
            'Baby and Kids',
            'Entertainment',
            'Travel and Leisure',
            'Fitness and Exercise',
            'Art and Crafts',
            'Music',
            'Technology'
        ];
        return [
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name' => function () use (&$categories) {
                return array_shift($categories);
            }
        ];
    }
}
