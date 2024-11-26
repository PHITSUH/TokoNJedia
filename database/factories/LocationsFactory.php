<?php

namespace Database\Factories;

use App\Models\Merchants;
use App\Models\UserData;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locations>
 */
class LocationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "country" => $this->faker->country,
            "city" => $this->faker->city,
            "address" => $this->faker->address,
            "notes" => $this->faker->citySuffix,
            "postal_code" => $this->faker->postcode,
            'locationable_type' => function(){
                $type = $this->faker->randomElement(['user_data', 'merchants']);
                
                return $type;
            },
            'locationable_id' => function($data){
                if($data['locationable_type'] === 'merchants'){
                    $location_id = Merchants::inRandomOrder()->value('id');
                }
                else{
                    $location_id = UserData::inRandomOrder()->value('id');
                }

                return $location_id;
            },
            "latitude" => $this->faker->latitude,
            "longitude" => $this->faker->longitude,
        ];
    }
}
