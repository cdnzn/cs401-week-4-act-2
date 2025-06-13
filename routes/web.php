<?php

use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource route for categories
Route::resource('category', CategoryController::class);




