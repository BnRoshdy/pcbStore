<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;


Route::group(['middelware' => 'guest:admin'], function() {
    Route::get('/login', [AuthenticatedSessionController::class , 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class , 'store'])->name('login');

});
