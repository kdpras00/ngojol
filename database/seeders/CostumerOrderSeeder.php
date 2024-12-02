<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CostumerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Menghasilkan 10 data palsu
            DB::table('costumer_order')->insert([
                'customer_name' => $faker->name, // Nama customer
                'email' => $faker->email, // Email customer
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
