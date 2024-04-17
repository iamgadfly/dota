<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'name',
        'price_usd',
        'price_rub',
        'count',
        'classid',
    ];
}
