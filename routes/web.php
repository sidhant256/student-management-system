<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\Coursecontroller;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', StudentController::class);

Route::resource('/teachers', TeacherController::class);

Route::resource('/courses', Coursecontroller::class);

Route::resource('/batches', BatchController::class);

Route::resource('/enrollments', EnrollmentController::class);

Route::resource('/payments', PaymentController::class);