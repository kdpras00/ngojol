<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverPickup extends Model
{
    use HasFactory;

    protected $table = 'driver_pickup';

    protected $fillable = [
        'driver_name',
        'phone_number',
        'pickup_date',
        'order_id',
        'status',
        'pickup_time'
    ];

    protected $casts = [
        'pickup_date' => 'date:Y-m-d',
        'pickup_time' => 'datetime:H:i:s'
    ];
}
