<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TrainTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {

            $setToday = $faker->boolean(20);

            DB::table('trains')->insert([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'arrival_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'train_code' => $faker->bothify('Train-###??'),
                'carriages_number' => $faker->numberBetween($min = 1, $max = 20),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
                // Se setToday è true, imposta la data su oggi, altrimenti genera una data casuale
                'ticket_date' => $setToday ? now()->toDateString() : $faker->date(),
            ]);
        }
    }
}