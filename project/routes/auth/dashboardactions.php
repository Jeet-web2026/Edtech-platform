<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->prefix('authenticated/dashboard')->middleware('auth', 'throttle:30,1')->group(function () {
    Route::post('save-admin', 'AddAdmin')->name('save-admin')->middleware('adminrole');
    Route::post('change-status/{type}/{id}', 'ChangeStatus')->name('change-status');
});
