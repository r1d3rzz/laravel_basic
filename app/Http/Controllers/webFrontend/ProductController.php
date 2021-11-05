<?php

namespace App\Http\Controllers\webFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $product = "Product Page";
        $product_item = ["Rice","Fruit","Juice"];
        return view('product',[
            'product' => $product,
            'product_item' => $product_item
        ]);
    }
}
