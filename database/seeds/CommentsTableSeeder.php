<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
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
            Comment::create(
                [
                    'user_id' => $faker->numberBetween($min = 1, $max = 10),
                    'tour_id' => $faker->numberBetween($min = 1, $max = 10),
                    'content' => $faker->realText(rand(200,1500))
                ]
            );
        }
    }
}
