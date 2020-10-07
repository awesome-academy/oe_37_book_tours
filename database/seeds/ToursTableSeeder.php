<?php

use Illuminate\Database\Seeder;
use App\Models\Tour;

class ToursTableSeeder extends Seeder
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
            Tour::create(
                [
                	'type_id' => $faker->numberBetween($min = 1, $max = 10),
                    'name' => $faker->name(),
                    'address' => $faker->address(),
                    'price' => $faker->numberBetween($min = 100000, $max = 3000000),
                    'image' => $faker->imageUrl($width = 640, $height = 480),
                    'discount' => $faker->numberBetween($min = 0, $max = 50),
                    'description' => $faker->realText(rand(50,200)),
                    'content' => $faker->realText(rand(200,1500))
                ]
            );
        }
    }
}
