<?php

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
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
            Review::create(
                [
                    'user_id' => $faker->numberBetween($min = 1, $max = 10),
                    'tour_id' => $faker->numberBetween($min = 1, $max = 10),
                    'content' => $faker->realText(rand(50,200))
                ]
            );
        }
    }
}
