<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kurniawan Dwi Prasetyo',
            'email' => 'kdpras00@gmail.com',
            'password' => Hash::make('pras0123'), // Password dienkripsi
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Raihan Nugroho',
            'email' => 'koyod@gmail.com',
            'password' => Hash::make('koyod123'), // Password dienkripsi
            'remember_token' => Str::random(10),
        ]);
    }
}
