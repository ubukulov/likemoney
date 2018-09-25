<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id) {
        $product = Product::find($id);
        $products = Product::where('active', 1)->limit(4)->get();
        return view('product', compact('product', 'products'));
    }
}
