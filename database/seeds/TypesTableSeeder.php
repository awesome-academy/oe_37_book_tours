<?php

use Illuminate\Database\Seeder;
use App\Models\Type; 

class TypesTableSeeder extends Seeder
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
            Type::create(
                [
                    'name' => $faker->name()
                ]
            );
        }
    }
}
