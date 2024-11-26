<?php

namespace Database\Seeders;

use App\Models\UserData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserData::factory()->count(10)->create();
        DB::table("user_data")->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'username' => 'dummy',
            'email' => 'dummy@gmail.com',
            'password' => bcrypt('dummy'),
            'phone' => '08812145337',
            'dob' => '2004-07-16',
            'gender' => 'Male',
            'image' => 'https://source.unsplash.com/random',
            'google_id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
