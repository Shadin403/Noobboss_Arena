<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Livewire\Admin\Main;
use App\Livewire\Admin\Tournaments;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', Main::class)->name('main');
    Route::get('/tournaments', Tournaments::class)->name('tournaments');
});


// Route::get('/tournaments', 'tournaments')->name('tournaments');
// Route::get('/transactions', 'transactions')->name('transactions');
// Route::get('/users', 'users')->name('users');

Route::get('/couter', Counter::class)->name('counter');
