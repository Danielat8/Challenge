<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use Faker\Factory as Faker;
use Faker\Provider\Fakecar;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new Fakecar($faker));

        for ($i = 0; $i < 10; $i++) {
            Vehicle::create([
                'brand' => $faker->vehicleBrand,
                'model' => $faker->vehicleModel,
                'plate_number' => strtoupper($faker->bothify('???-####')),
                'insurance_date' => $faker->dateTimeBetween('now', '+1 year')
            ]);
        }
    }
}
