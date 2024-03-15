<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i<50 ; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->startStation = $faker->city;
            $newTrain->endStation = $faker->city;
            $newTrain->hourDeparture = $faker->time($format = 'H:i:s', $max = 'now');
            $newTrain->hourArrive = $faker->time($format = 'H:i:s', $max = 'now');
            $newTrain->trainCode = $faker->unique()->ean8;
            $newTrain->coaches = $faker->numberBetween($min = 1, $max = 12);
            $newTrain->onTime = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;
            $newTrain->save();
        }
    }
}
