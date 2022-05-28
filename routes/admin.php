<?php

use App\Http\Controllers\Admin\aorder;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\editorder;
use App\Http\Controllers\Admin\statuss;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\addorder;
use App\Http\Controllers\Admin\shipments;
use App\Http\Controllers\Admin\editshipment;
use App\Http\Controllers\Admin\promocodes;

Route::group(['as' => 'admin.'], function() {


    Route::group(['middleware' => 'auth:admin'], function() {

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        Route::get('status',[statuss::class , 'st'])->name('status') ;
        Route::get('order',[aorder::class , 'getdata'])->name('order');
        Route::post('order',[aorder::class , 'update'])->name('order');
        Route::get('edito' , [editorder::class , 'getdata'])->name('edito');
        Route::post('edito' , [editorder::class , 'edit'])->name('edito');
        Route::get('addorder' , [addorder::class , 'aview'])->name('addorder');
        Route::post('addorder' , [addorder::class , 'add'])->name('addorder');
        Route::view('shipmentdetails','admin.shipping-payment')->name('shipment');
        Route::post('shipmentdetails',[addorder::class,'adds'])->name('shipment');
        Route::get('ashipment',[shipments::class,'getdata'])->name('ashipment');
        Route::post('ashipment',[shipments::class,'updatex'])->name('ashipment');
        Route::get('editshipment',[editshipment::class,'getdata'])->name('editshipment');
        Route::post('editshipment',[editshipment::class,'update'])->name('editshipment');
        Route::get('promocode',[promocodes::class,'getdata'])->name('promocode');
        Route::post('promocode',[promocodes::class,'update'])->name('promocode');

    });

    Route::group(['middleware' => 'guest:admin'], function() {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');
    });

});
