<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('public.index');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/career', function () {
    return view('public.career');
});

Route::get('/security', function () {
    return view('public.security');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tradinghistory', function () {
        return view('user.tradinghistory');
    })->name('tradinghistory');
    
});
