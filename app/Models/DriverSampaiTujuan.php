<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverSampaiTujuan extends Model
{
    use HasFactory;

    protected $table = 'driver_sampai_tujuan';

    protected $fillable = [
        'driver_name',
        'phone_number',
        'delivery_date',
        'order_id',
        'status',
        'arrival_time'
    ];

    protected $casts = [
        'delivery_date' => 'date:Y-m-d',
        'arrival_time' => 'datetime:H:i:s'
    ];
}
