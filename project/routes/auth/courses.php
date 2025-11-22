<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SyllabusController;
use Illuminate\Support\Facades\Route;

Route::prefix('authenticated/dashboard/course')->middleware(['auth', 'adminrole'])->group(function () {
    Route::resource('manage', CoursesController::class);
    Route::resource('syllabus', SyllabusController::class);
});
