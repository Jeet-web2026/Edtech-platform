<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

Route::prefix('authenticated/dashboard/manage')->middleware(['auth', 'adminrole'])->group(function () {
    Route::resource('courses', CoursesController::class);
});
