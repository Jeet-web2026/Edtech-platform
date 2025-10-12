<?php

use App\Livewire\Auth\Index;
use App\Livewire\Auth\Signin;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('signup', Index::class)->name('signup');
    Route::get('signin', Signin::class)->name('signin');
});
