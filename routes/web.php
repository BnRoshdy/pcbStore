<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orders;
use App\Http\Controllers\cart;
use App\Http\Controllers\checkout;
use App\Http\Controllers\admin;
use App\Http\Controllers\editorder;
use app\http\controllers\promocodes;
use app\http\controllers\shipments;
use app\http\controllers\s;


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

Route::view('order','Order');
Route::post('order',[orders::class ,'add']);
Route::post('/pay',[checkout::class , 'add'] );
Route::get('/', function () {
    return view('Home',);
});
Route::get('/ad', function () {
    return view('status',);
});
Route::get('/cart',[cart::class , 'getdata']);
Route::post('/cart',[cart::class , 'editOrder']);
Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'varified']);

Route::view('/checkout','shipping-payment');

Route::get('/admin-order',[admin::class , 'getdata']);
Route::post('/admin-order',[admin::class , 'update']);

Route::get('edit-order' , [editorder::class , 'getdata']);
Route::post('edit-order' , [editorder::class , 'edit']);

//Route::get('admin-shipment' , [shipments::class , 'getdata']);
//Route::post('admin-shipment' , [shipments::class , 'edit']);

//Route::get('admin-promocode' , [promocodes::class , 'getdata']);
//Route::post('admin-promocode' , [promocodes::class , 'edit']);

Route::get('admin-promocode' ,[s::class , 'getdata'] );





