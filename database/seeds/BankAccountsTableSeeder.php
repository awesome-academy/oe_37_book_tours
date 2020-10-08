<?php

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankAccountsTableSeeder extends Seeder
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
            Bank::create(
                [
                    'user_id' => $faker->numberBetween($min = 1, $max = 10),
                    'user_card' => $faker->numberBetween($min = 1, $max = 10),
                    'name' => $faker->name(),
                    'account_holder' => $faker->name(),
                    'card_number' => $faker->creditCardNumber(),
                    'expired_date' => $faker->dateTime($max = 'now', $timezone = null)
                ]
            );
        }
    }
}
