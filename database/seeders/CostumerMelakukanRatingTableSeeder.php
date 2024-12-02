<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CostumerMelakukanRatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Generate 10 fake data entries
            DB::table('customer_melakukan_rating')->insert([
                'customer_id' => $faker->numberBetween(1, 100), // Random customer ID between 1 and 100
                'customer_name' => $faker->name, // Customer name
                'order_id' => $faker->numberBetween(1, 100), // Random order ID between 1 and 100
                'rating' => $faker->numberBetween(1, 5), // Random rating between 1 and 5
                'review' => $faker->sentence(), // Random review
                'rating_date' => $faker->date(), // Generate random date
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
