<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) 
        {
            $newTravel = new Package();
            $newTravel->destination = $faker->city();
            $newTravel->destination_nation = $faker->state();
            $newTravel->price = $faker->randomFloat(2, 200, 9999);
            $newTravel->departure_day = $faker->dateTimeInInterval('+1 week', '+1 year');
            // $newTravel->departure_time = $faker->time('H:i:s');
            $newTravel->return_day = $faker->dateTimeInInterval('+1 week', '+1 year');
            // $newTravel->return_time = $faker->time('H:i:s');
            $newTravel->save();
        }
    }
}