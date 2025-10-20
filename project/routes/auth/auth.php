<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Auth\Index;
use App\Livewire\Auth\Signin;
use App\Livewire\Dashboard\Index as DashboardIndex;
use App\Livewire\Dashboard\ManageAdmins;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('signup', Index::class)->name('signup');
    Route::get('signin', Signin::class)->name('login');
});

Route::prefix('authenticated')->middleware('auth', 'throttle:5,1')->group(function () {
    Route::get('dashboard/{type}', DashboardIndex::class)->name('dashboard');
    Route::prefix('dashboard/manage')->middleware('adminrole')->group(function () {
        Route::get('admins', ManageAdmins::class)->name('manage-admins');
    });
    Route::get('signout', [AuthController::class, 'logout'])->name('logout');
});
