<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            User::create(
                [
                    'name' => $faker->name(),
                    'email' => $faker->email(),
                    'password' => Hash::make('123456'),
                    'gender' => $faker->title($gender = 'male'|'female'),
                    'phone' => $faker->phoneNumber(),
                    'address' => $faker->address()
                ]
            );
        }
    }
}
