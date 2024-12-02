<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DriverMenerimaOrderTableSeeder extends Seeder
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
            DB::table('driver_menerima_order')->insert([
                'driver_name' => $faker->name, // Nama driver
                'phone_number' => $faker->phoneNumber, // Nomor telepon driver
                'order_date' => $faker->date(), // Menghasilkan tanggal acak
                'order_id' => $faker->numberBetween(1, 100), // ID pesanan acak antara 1 hingga 100
                'status' => $faker->randomElement(['Dalam Perjalanan', 'Diterima', 'Selesai', 'Dibatalkan']),
                'pickup_time' => $faker->time(), // Menghasilkan waktu acak
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
