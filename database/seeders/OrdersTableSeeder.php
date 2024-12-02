<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
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
            DB::table('orders')->insert([
                'username' => $faker->userName, // Username acak
                'order_date' => $faker->date(), // Tanggal acak
                'total_price' => $faker->randomFloat(2, 10, 1000), // Total harga antara 10 dan 1000
                'status' => $faker->randomElement(['Diproses', 'Dikirim', 'Selesai', 'Dibatalkan', 'Menunggu Pembayaran']), // Status acak
                'payment_method' => $faker->randomElement(['Kartu Kredit', 'Transfer Bank', 'PayPal', 'Cash on Delivery']), // Metode pembayaran acak
                'created_at' => now(), // Waktu dibuat
                'updated_at' => now(), // Waktu diperbarui
            ]);
        }
    }
}
