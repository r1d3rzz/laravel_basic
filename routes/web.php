<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\webFrontend\ContactController;
use App\Http\Controllers\webFrontend\ProductController;
use App\Http\Controllers\webFrontend\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::get('about',[AboutController::class,'about']);
Route::get('product',[ProductController::class,'product']);
Route::get('contact',[ContactController::class,'contact']);
Route::get('shop',[ShopController::class,'shop']);
