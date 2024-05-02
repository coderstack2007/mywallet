<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\SpendingsController;
use App\Models\Spendings;

#Auth
Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('throttle:5');
Route::post('loginsystem', [AuthController::class, 'loginsystem'])->name('loginsystem');
Route::get('register', [AuthController::class, 'register'])->name('register')->middleware('throttle:5');
Route::post('registersystem', [AuthController::class, 'registersystem'])->name('registersystem');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



#User
Route::get('/account', [DashboardController::class, 'account'])->name('account');
Route::put('/users/{id}', [DashboardController::class, 'passwordupdate'])->name('passwordupdate');

Route::resources([
    'dashboards' => DashboardController::class,

]);

Route::get('/', function () {
    return view('index');
});

Route::get('/error', function(){
    return view('error');
});
#Paymeny
Route::get('payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('users/{user}',[ PaymentController::class, 'window'])->name('window');
Route::put('users/{user}/put',[PaymentController::class, 'process'])->name('process');