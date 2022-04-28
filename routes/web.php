<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthCustomer\CustomerRegisterController;
use App\Http\Controllers\AuthCustomer\CustomerLoginController;
use App\Http\Controllers\AuthCustomer\CustomerConfirmPasswordController;
use App\Http\Controllers\AuthCustomer\CustomerForgotPasswordController;
use App\Http\Controllers\AuthCustomer\CustomerResetPasswordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Auth::routes();
});

Route::get('register', [CustomerRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [CustomerRegisterController::class, 'register'])->name('register');

Route::get('login', [CustomerLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomerLoginController::class, 'login'])->name('login');
Route::post('logout', [CustomerLoginController::class, 'logout'])->name('logout');

Route::get('/password/reset', [CustomerForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/reset/', [CustomerForgotPasswordController::class, 'reset'])->name('password.update');

Route::get('/lang/{locale}',[LocaleController::class,'set'])->name('locale');
Route::get('/', [HomeController::class, 'index'])->name('home');
