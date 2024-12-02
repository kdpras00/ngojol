<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Menghasilkan 10 data palsu
            DB::table('login')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // Menggunakan bcrypt untuk password
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
