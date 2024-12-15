<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerOrder extends Model
{
    use HasFactory;

    protected $table = 'costumer_order';

    protected $fillable = [
        'customer_name',
        'email',
        'order_date',
        'total_price',
        'status',
        'payment_method',
    ];


}
