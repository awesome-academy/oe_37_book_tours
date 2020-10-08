<?php

use Illuminate\Database\Seeder;
use App\Models\TourBooking;

class TourBookingsTableSeeder extends Seeder
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
            TourBooking::create(
                [
                    'user_id' => $faker->numberBetween($min = 1, $max = 10),
                    'tour_id' => $faker->numberBetween($min = 1, $max = 10),
                    'payment' => $faker->creditCardType(),
                    'price' => $faker->numberBetween($min = 100000, $max = 3000000),
                    'people_num' => $faker->numberBetween($min = 1, $max = 5),
                    'from_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'to_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'contact_name' => $faker->name(),
                    'email' => $faker->email(),
                    'phone' => $faker->phoneNumber()
                ]
            );
        }
    }
}
