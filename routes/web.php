<?php

use App\Http\Controllers\AdminDataController;
use App\Http\Controllers\Exchange;
use App\Http\Controllers\Investments;
use App\Http\Controllers\Withdrawals;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\referralsController as Referrals;
use App\Http\Controllers\NewPayments;
use App\Http\Controllers\PaymentsController as Payment;

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
        return auth() -> user() -> role == 'admin' ? redirect('admin/dashboard') : view('user.dashboard');
    })->name('dashboard');

    

    Route::get('/tradinghistory', function () {
        return view('user.tradinghistory');
    })->name('tradinghistory');

    Route::get('/referuser', function () {
        return view('user.referuser');
    })->name('referuser');

    Route::get('/support', function () {
        return view('user.support');
    })->name('support');

    Route::get('/accounthistory', function () {
        return view('user.accounthistory');
    })->name('accounthistory');

    Route::get('/asset-balance', function () {
        return view('user.asset-balance');
    })->name('asset-balance');

    Route::get('/buy-plan', function () {
        return view('user.buy-plan');
    })->name('buy-plan');

    Route::get('/myplans', function () {
        return view('user.myplans');
    })->name('myplans');

    Route::get('/fund', function () {
        return view('user.fund');
    })->name('fund');

    Route::get('/withdraw', function () {
        return view('user.withdraw');
    })->name('withdraw');

    Route::get('/payment', [NewPayments::class, 'index'])->name('payment');
    
    Route::get('/withdraw-funds', [NewPayments::class, 'withdraw'])->name('withdrawal');


    // authentication protected apis
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin' // Apply the custom AdminMiddleware
])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/dashboard', [AdminDataController::class, 'page']);

    // Add more admin routes here
});


Route::prefix('/api') -> group(function () {
    Route::get('/referrals', [Referrals::class, 'index']);
    Route::get('/exchange', [Exchange::class, 'index']);
    Route::get('/payment/create', [Payment::class, 'create']);
    Route::resource('/withdrawal', Withdrawals::class);
    Route::get('/investments/subscribe', [Investments::class, 'subscribe']);
});

Route::prefix('/api2') -> group(function () {
    Route::get('/datacards', [AdminDataController::class, 'index']);
    Route::get('/payments/confirm', [Payment::class, 'confirm']);
    Route::get('/payments/delete', [Payment::class, 'delete']);
    Route::get('/payments/pending', [AdminDataController::class, 'pendingPayments']);
});