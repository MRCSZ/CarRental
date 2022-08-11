<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('cars')->truncate();


        for ($j=0; $j < 1; $j++) {

            $cars = [];

            for ($i=0; $i < 100; $i++) {
                $cars [] = [
                    'brand' => $faker->randomElement(['Volkswagen', 'Opel', 'Audi', 'BMW', 'Kia', 'Mercedes', 'Lexus', 'Toyota']),
                    'model' => $faker->word(),
                    'production_year' => $faker->numberBetween(2018, 2022),
                    'engine' => $faker->randomElement(['benzyna', 'diesel', 'hybryda']),
                    'engine_power' => $faker->randomElement([1.1, 1.3, 1.5, 1.6, 1.9, 2.0, 2.4, 2.8, 3.0]),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'body_style_index' => $faker->numberBetween(1, 6),
                    'score' => $faker->numberBetween(1, 10)
                ];
            }

            DB::table('cars')->insert($cars);
        }
    }
}
