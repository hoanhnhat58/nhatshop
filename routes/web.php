<?php

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


Auth::routes();

Route::get('home', [ 'as' => 'trang-chu', 'uses' => 'App\Http\Controllers\PageController@getIndex']);
Route::get('/', [ 'as' => 'trang-chu', 'uses' => 'App\Http\Controllers\PageController@getIndex']);


#Route::get('/product-type/{type}',[App\Http\Controllers\PageController::class,'getLoaiSp'])->name('pages/loai-san-pham');
Route::get('loai-san-pham/{type}',['as' => 'loaisanpham', 'uses' => 'App\Http\Controllers\PageController@getLoaiSp']);
Route::get('product/{id}',['as' => 'sanpham', 'uses' => 'App\Http\Controllers\PageController@getSanPham']);

//Route::get('product/{id}',[App\Http\Controllers\PageController::class,'getSanPham'])->name('pages/product');

Route::get('about',[App\Http\Controllers\PageController::class,'getGioiThieu'])->name('pages/about');

Route::get('contacts',[App\Http\Controllers\PageController::class,'getLienHe'])->name('pages/contacts');

//Route::get('check-out',[App\Http\Controllers\PageController::class,'getCheckOut'])->name('pages/check-out');

//Route::get('shopping-cart',[App\Http\Controllers\PageController::class,'getShoppingCart'])->name('pages/shopping-cart');
Route::get('pricing',[App\Http\Controllers\PageController::class,'getPricing'])->name('pages/pricing');
Route::get('add-to-cart/{id}',[
    'as' => 'themgiohang',
    'uses' =>'App\Http\Controllers\PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
    'as' => 'xoagiohang',
    'uses'  =>'App\Http\Controllers\PageController@getDelItemCart'
]);
Route::get('check-out',[
        'as'=>'dathang',
        'uses'=>'App\Http\Controllers\PageController@getCheckOut'
]);
Route::post('check-out',[
    'as'=>'dathang',
    'uses'=>'App\Http\Controllers\PageController@getPostCheckOut'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'App\Http\Controllers\PageController@getSearch'
]);
