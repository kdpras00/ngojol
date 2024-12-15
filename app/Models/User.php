<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Jika Anda ingin menggunakan Laravel Passport atau Sanctum untuk API authentication
    public function createToken($name, array $scopes = [])
    {
        return $this->tokens()->create([
            'name' => $name,
            'scopes' => $scopes,
        ]);
    }

    // Jika ada relasi lain, bisa ditambahkan di sini
}
