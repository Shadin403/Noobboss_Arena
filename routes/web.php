<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/','main')->name('main');
        Route::get('/tournaments','tournaments')->name('tournaments');
        Route::get('/transactions','transactions')->name('transactions');
        Route::get('/users','users')->name('users');
    });
});
