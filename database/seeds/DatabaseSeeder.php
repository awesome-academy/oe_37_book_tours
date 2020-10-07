<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(BankAccountsTableSeeder::class);
        $this->call(ToursTableSeeder::class);
        $this->call(TourBookingsTableSeeder::class);
        $this->call(RevenuesTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
    }
}
