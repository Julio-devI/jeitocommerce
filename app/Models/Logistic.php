<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'logistic_name',
        'is_free',
        'estimated_shipping_fee',
        'enabled'
    ];
}
