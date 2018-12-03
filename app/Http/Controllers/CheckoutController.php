<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;

class CheckoutController extends Controller
{
    protected $session_key;

    public function __construct()
    {
        if(!$this->session_key) {
            $this->session_key = (\Auth::check()) ? \Auth::id() : 2;
        }

        \Cart::session($this->session_key);
    }

    public function add($product_id)
    {
        $product = Product::find($product_id);
        if($product) {
            if(\Cart::get($product->id)) {
                \Cart::update($product->id, [
                    'quantity' => 1
                ]);
            } else {
                // now the product to be added on cart
                $product = array(
                    'id' => $product->id,
                    'name' => $product->title,
                    'price' => 15000,
                    'quantity' => 1,
                    'attributes' => array(),
                    'conditions' => array()
                );

                // finally add the product on the cart
                \Cart::add($product);
            }
        }

        return redirect()->back();
    }

    public function remove($product_id)
    {
        $item = \Cart::get($product_id);
        if($item) {
            \Cart::remove($product_id);
            return redirect('cart');
        }

        return redirect()->back();
    }

    public function index()
    {
        $items = \Cart::getContent();

        return view('cart', compact('items'));
    }
}
