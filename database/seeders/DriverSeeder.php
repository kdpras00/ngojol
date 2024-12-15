<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert a driver record into the 'drivers' table
        Driver::create([
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'address' => 'Test Address',
            'vehicle' => 'motor',
            'license' => '123456789',
            'ktp' => '987654321',
            'photo' => 'test-photo.jpg',
        ]);
    }
}
