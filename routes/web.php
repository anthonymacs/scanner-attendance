<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

Route::view('/', 'livewire.home.index')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
     Route::get('/Register', Register::class)->name('register');
    
Route::view('/dashboard', 'livewire.Dashboard.index')->name('dashboard');


});
