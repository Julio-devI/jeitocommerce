<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'original_price',
        'package_width',
        'description',
        'weight',
        'views',
        'rating_stars',
        'price',
        'shopid',
        'sales',
        'discount_id',
        'images',
        'likes',
        'item_id',
        'tenures'
    ];
}
