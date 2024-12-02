<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Passwordreset extends Authenticatable implements CanResetPassword
{
    use HasApiTokens, Notifiable;
    //
}
