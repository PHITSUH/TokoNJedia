<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ShipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("shipments")->insert([
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "name"=> "Regular",
            "base_price"=> "10000",
            "variable_price" => "20000",
            "created_at"=> Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("shipments")->insert([
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "name"=> "Next Day",
            "base_price"=> "30000",
            "variable_price" => "50000",
            "created_at"=> Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("shipments")->insert([
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "name"=> "Instant 3 Jam",
            "base_price"=> "100000",
            "variable_price" => "500000",
            "created_at"=> Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("shipments")->insert([
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "name"=> "Same Day",
            "base_price"=> "50000",
            "variable_price" => "100000",
            "created_at"=> Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("shipments")->insert([
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "name"=> "Cargo",
            "base_price"=> "5000",
            "variable_price" => "10000",
            "created_at"=> Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
