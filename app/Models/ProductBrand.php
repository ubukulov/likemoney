<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    public $table = 'product_brands';

    public $fillable = [
        'id', 'title', 'active', 'logo', 'created_at', 'updated_at'
    ];
}
