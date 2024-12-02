<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegisterTableSeeder extends Seeder
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
            DB::table('register')->insert([
                'nama' => $faker->name, // Nama acak
                'email' => $faker->unique()->safeEmail, // Email acak dan unik
                'password' => bcrypt('password'), // Password yang di-hash
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
