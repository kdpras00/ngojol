<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HistoryOrderTableSeeder extends Seeder
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
            DB::table('history_order')->insert([
                'user_id' => $faker->numberBetween(1, 100), // ID pengguna acak antara 1 hingga 100
                'product_id' => $faker->numberBetween(1, 50), // ID produk acak antara 1 hingga 50
                'quantity' => $faker->numberBetween(1, 10), // Jumlah produk acak antara 1 hingga 10
                'total_price' => $faker->randomFloat(2, 10, 500), // Total harga acak antara 10 hingga 500
                'order_date' => $faker->dateTimeThisYear(), // Tanggal pemesanan dalam tahun ini
                'status' => $faker->randomElement(['completed', 'pending', 'canceled']), // Status acak
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
