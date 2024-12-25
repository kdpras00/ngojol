<?php

namespace Database\Seeders;

use App\Models\DriverMenerimaOrder;
use App\Models\DriverPickup;
use App\Models\HistoryOrder;
use App\Models\Register;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([PasswordResetsTableSeeder::class,]);
        $this->call(CostumerOrderSeeder::class);
        $this->call(CostumerMelakukanRatingTableSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DriverMenerimaOrderTableSeeder::class);
        $this->call(DriverPickupTableSeeder::class);
        $this->call(HistoryOrderTableSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(LoginTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(RegisterTableSeeder::class);
    }
}
