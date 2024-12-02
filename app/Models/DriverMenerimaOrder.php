<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverMenerimaOrder extends Model
{
    use HasFactory;

    protected $table = 'driver_menerima_order';

    protected $fillable = [
        'driver_name',
        'phone_number',
        'order_date',
        'order_id',
        'status',
        'pickup_time'
    ];

    protected $casts = [
        'order_date' => 'date:Y-m-d',
        'pickup_time' => 'datetime:H:i:s'
    ];
}
