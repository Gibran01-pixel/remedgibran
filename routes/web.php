<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontendController::class, 'index']);
Route::get('/menu', [FrontendController::class, 'menu']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
