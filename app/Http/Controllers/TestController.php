<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index() {
        $file = file( $_SERVER['DOCUMENT_ROOT'] . "/files/alser.txt"); // Считываем весь файл в массив
        for($i = 0; $i < sizeof($file); $i++) {
            $arr = explode("|", $file[$i]);

            if(isset($arr[0]) && isset($arr[1]) && isset($arr[2]) && isset($arr[3]) && isset($arr[4])) {
                $article = $arr[0];
                $brand = $arr[1];
                $title = $arr[2];
                $base_price = $arr[3];
                if(strlen($arr[4]) >= 2) {
                    $qty = substr($arr[4], 0, 2);
                    $quantity = ($qty == "+5") ? 5 : 2;
                }else{
                    $quantity = 0;
                }
                $brand_id = $this->exists_brand($brand);
                $brand_id = ($brand_id) ? $brand_id : 0;
                DB::transaction(function () use ($title, $brand_id, $base_price, $quantity, $article) {
                    $time = date("Y-m-d H:i:s");
                    $id = DB::table('products')->insertGetId([
                        'title' => $title, 'category_id' => 0, 'brand_id' => $brand_id , 'active' => '1', 'filled' => '1', 'verified' => '1' , 'created_at' => $time, 'updated_at' => $time
                    ]);

                    if($id) {
                        $pvp_id = DB::table('product_vendor_products')->insertGetId([
                            'product_id' => $id, 'vendor_id' => 1, 'base_price' => $base_price, 'article' => $article, 'quantity' => $quantity,
                            'created_at' => $time, 'updated_at' => $time, 'product_title' => $title
                        ]);
                    }
                }, 5);
            }
        }
    }

    public function exists_brand($title){
        $title = ucfirst($title);
        $result = DB::select("SELECT * FROM product_brands WHERE title='$title'");
        if($result){
            return $result[0]->id;
        }

        return false;
    }
}
