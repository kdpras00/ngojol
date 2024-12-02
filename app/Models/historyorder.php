<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryOrder extends Model
{
    use HasFactory;

    protected $table = 'history_order';

    protected $fillable = [
        'user_id',
        'order_id',
        'status',
        'order_date'
    ];

    protected $casts = [
        'order_date' => 'date:Y-m-d'
    ];
}
