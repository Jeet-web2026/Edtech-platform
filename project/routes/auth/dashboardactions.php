<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->prefix('authenticated/dashboard')->middleware(['auth', 'adminrole'], 'throttle:30,1')->group(function () {
    Route::post('save-admin', 'AddAdmin')->name('save-admin');
    Route::post('save-updated-admin/{userid}/{adminid}', 'updateAdmin')->name('update-admin');
    Route::post('change-status/{type}/{id}', 'ChangeStatus')->name('change-status');
    Route::get('admin/edit/{id}', 'EditAdmin')->name('edit-admin');
    Route::post('enrollment', 'EnrollmentStart')->name('enrollment-start');
    Route::get('student-additional-details/{id}', 'Studentadditionaldetails')->name('student.additional-details');
    Route::post('enrollment-additional-details-save', 'StudentadditionaldetailsSave')->name('enrollment-additional-details');
    Route::get('view-student-details/{id}', 'ViewStudentDetails')->name('view-student-details');
    Route::get('edit-student-details/{id}', 'EditStudentDetails')->name('edit-student-details');
    Route::post('save-page-details/{pagename}', 'SavePageDetails')->name('save-page-details');
});

require __DIR__ . '/courses.php';
