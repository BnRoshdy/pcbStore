<?php

use App\Http\Controllers\cart;
use App\Http\Controllers\checkout;
use App\Http\Controllers\orders;
use App\Http\Controllers\myorder;
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

Route::get ('order',function (){
  if(Auth::check())
      return view('order');
   else
      return  redirect('/login');
});
Route::post('order',[orders::class ,'add']);
Route::post('/pay',[checkout::class , 'add'] );
Route::VIEW('/', 'Home' );
Route::get('/cart',[cart::class , 'getdata']);
Route::post('/cart',[cart::class , 'editOrder']);
Route::get('/myorder',[myorder::class , 'getdata']);
Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'varified']);
Route::view('/checkout','shipping-payment');




