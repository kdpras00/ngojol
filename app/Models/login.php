<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'login';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];

    // Jika Anda ingin menyembunyikan kolom tertentu saat serialisasi
    protected $hidden = [
        'password',
    ];
}
