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
        'tenures',
        'condition',
        'cmt_count',
        'package_height',
        'days_to_ship',
        'name',
        'currency',
        'item_dangerous',
        'item_sku',
        'variations',
        'is_2tier_item',
        'size_chart',
        'package_length',
        'video_info',
        'is_pre_order',
        'has_variation',
        'reserved_stock',
        'stock',
        'logistic_id',
        'attribute_id'
    ];
}
