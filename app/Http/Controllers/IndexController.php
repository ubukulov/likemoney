<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index() {
        $products = Product::where('active', 1)->limit(8)->get();
        return view('welcome', compact('products'));
    }
}
