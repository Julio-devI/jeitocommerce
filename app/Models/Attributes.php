<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    use HasFactory;

    protected $fillable = [
        'attribute_name',
        'is_mandatory',
        'attribute_value',
        'string_type'
    ];
}
