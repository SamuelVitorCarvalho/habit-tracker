<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------------
| Como criar rotas passando view ou o HTML diretamente
|---------------------------------------------------------------------------

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

*/

// Site
Route::get('/', [SiteController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index']);
