<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerMelakukanRating extends Model
{
    use HasFactory;

    protected $table = 'costumer_melakukan_rating';

    protected $fillable = [
        'customer_id',
        'customer_name',
        'order_id',
        'rating',
        'review',
        'rating_date',
        'created_at',
        'updated_at',
    ];
}
