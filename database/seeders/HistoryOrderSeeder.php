<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HistoryOrderSeeder extends Seeder
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
                'order_id' => $faker->numberBetween(1, 100), // ID pesanan acak antara 1 hingga 100
                'status' => $faker->randomElement(['Diproses', 'Dikirim', 'Selesai', 'Dibatalkan', 'Menunggu Pembayaran']), // Status acak
                'order_date' => $faker->date(),
            ]);
        }
    }
}
