<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(PromosSeeder::class);
        $this->call(UserDataSeeder::class);
        $this->call(ShipmentsSeeder::class);
        $this->call(MerchantsSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductPromosSeeder::class);
        $this->call(ProductImagesSeeder::class);
        $this->call(ProductVariantsSeeder::class);
        $this->call(FlashSaleProductsSeeder::class);
    }
}
