<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'order_date',
        'total_price',
        'status',
        'payment_method',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username'); // Misalkan 'username' adalah foreign key
    }


}