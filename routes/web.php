<?php

use Illuminate\Support\Facades\Route;

     Route::prefix("/")->group(function () {
        Route::get('', \App\Livewire\Dashboard\HomePage::class)->name('dashboard.index');
    });

