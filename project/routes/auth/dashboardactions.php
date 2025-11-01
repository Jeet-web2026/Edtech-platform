<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->prefix('authenticated/dashboard')->middleware(['auth', 'adminrole'], 'throttle:30,1')->group(function () {
    Route::post('save-admin', 'AddAdmin')->name('save-admin');
    Route::post('save-updated-admin/{userid}/{adminid}', 'updateAdmin')->name('update-admin');
    Route::post('change-status/{type}/{id}', 'ChangeStatus')->name('change-status');
    Route::get('admin/edit/{id}', 'EditAdmin')->name('edit-admin');
    Route::post('enrollment', 'EnrollmentStart')->name('enrollment-start');
});
