<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("promos")->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'promo_name' => "New Year's Sale",
            'promo_image' => './public/assets/promos/year-end.png',
            "promo_description" => "New Year's Sale up to 70% 
            off. Sale ends at 4th 
            January.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("promos")->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'promo_name' => "Santa’s Surprise",
            'promo_image' => './public/assets/promos/christmas-sale.png',
            "promo_description" => "Christmas Sale up to 50% 
            off. Sale ends at 31th 
            December.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("promos")->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'promo_name' => "Driver’s Night",
            'promo_image' => './public/assets/promos/driving-promo.png',
            "promo_description" => "Sale on driving products.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("promos")->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'promo_name' => "Super Sale",
            'promo_image' => './public/assets/promos/super-sale.png',
            "promo_description" => "Sale up to 75% off, limited 
            time only.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("promos")->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'promo_name' => "PB's Magical Blessing",
            'promo_image' => './public/assets/promos/pb-promo.png',
            "promo_description" => "Up to 100% off.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
