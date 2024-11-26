<?php

namespace Database\Seeders;

use App\Models\ProductPromos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductPromos::factory()->count(20)->create();
    }
}
