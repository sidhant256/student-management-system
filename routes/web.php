<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', StudentController::class);