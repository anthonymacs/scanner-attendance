<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;


Route::view('/', 'livewire.home.index')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');

Route::view('/Dashboard', 'livewire.Dashboard.index')->name('Dashboard');

});
