<?php

namespace Database\Seeders;

use App\Models\FlashSaleProducts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlashSaleProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FlashSaleProducts::factory()->count(5)->create();
    }
}
