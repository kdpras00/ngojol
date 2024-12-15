<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PasswordResetsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('password_resets')->insert([
            'email' => 'kdpras00@gmail.com',
            'token' => Str::random(60),
            'created_at' => Carbon::now(),
        ]);
    }
}
