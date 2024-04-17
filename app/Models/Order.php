<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'user_id',
        'status',
        'usd_amount',
        'rub_amount',
        'items',
    ];
}
