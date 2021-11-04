<?php

namespace App\Http\Controllers\webFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shop');
    }
}
