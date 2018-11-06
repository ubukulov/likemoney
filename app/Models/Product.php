<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id', 'category_id', 'brand_id', 'title', 'full_text', 'description', 'keywords', 'active',
        'filled', 'verified', 'views', 'article', 'images', 'created_at', 'updated_at'
    ];

    public function hotSells() {
        $hot_sells = Product::limit(10)->get();
        return $hot_sells;
    }
}
