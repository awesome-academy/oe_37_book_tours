<?php

use Illuminate\Database\Seeder;
use App\Models\Revenue;

class RevenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++)
        {
            Revenue::create(
                [
                    'total_tour' => $faker->numberBetween($min = 1, $max = 10),
                    'from_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'to_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'total_income' => $faker->numberBetween($min = 1000000, $max = 5000000)
                ]
            );
        }
    }
}
