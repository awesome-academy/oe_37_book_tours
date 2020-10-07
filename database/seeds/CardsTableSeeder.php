<?php

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardsTableSeeder extends Seeder
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
            Card::create(
                [
                    'name' => $faker->name()
                ]
            );
        }
    }
}
