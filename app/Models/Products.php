<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'release',
        'offer',
        'intro',
        'description',
        'presale',
        'featured',
        'status',
        'filename',
        'image_small_url',
        'image_small_path',
        'image_big_url',
        'image_big_path',
        'product_status_id',
        'demography_id',
    ];
}
