<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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


#Spendings

#House
Route::get('house', [SpendingsController::class, 'house'])->name('house');
Route::post('first', [SpendingsController::class, 'first'])->name('first');
Route::post('second', [SpendingsController::class, 'second'])->name('second');

#FoodAndDrinks
Route::get('Food-and-Drinkd', [SpendingsController::class, 'food_and_drinks'])->name('foodanddrinks');
#Education
Route::get('Education', [SpendingsController::class, 'education'])->name('education');