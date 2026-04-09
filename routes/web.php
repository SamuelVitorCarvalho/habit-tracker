<?php

use App\Http\Controllers\SiteController;
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

// Início do Site
Route::get('/', [SiteController::class, 'index']);
