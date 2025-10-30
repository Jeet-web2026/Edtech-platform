<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->prefix('authenticated/dashboard')->middleware('auth', 'throttle:15,1')->group(function () {
    Route::post('save-admin', 'AddAdmin')->name('save-admin')->middleware('adminrole');
});
