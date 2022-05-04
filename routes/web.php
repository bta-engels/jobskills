<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthCustomer\CustomerRegisterController;
use App\Http\Controllers\AuthCustomer\CustomerLoginController;
use App\Http\Controllers\AuthCustomer\CustomerConfirmPasswordController;
use App\Http\Controllers\AuthCustomer\CustomerForgotPasswordController;
use App\Http\Controllers\AuthCustomer\CustomerResetPasswordController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\RegisterController;

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
    'as' => 'admin.',
], function () {
    Auth::routes();
});

Route::match(['get','post'],'admin/register', fn() => redirect('/'))->name('remove.admin.register');

//customer
Route::get('register', [CustomerRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [CustomerRegisterController::class, 'register'])->name('register');
Route::get('login', [CustomerLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomerLoginController::class, 'login'])->name('login');
Route::post('logout', [CustomerLoginController::class, 'logout'])->name('logout');
Route::get('password/reset', [CustomerForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/reset', [CustomerResetPasswordController::class, 'reset'])->name('password.update');
Route::get('password/reset/{token}', [CustomerResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/email', [CustomerForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('confirm/{customer}', [CustomerController::class, 'confirm'])->name('confirm');
Route::get('resend/{customer}', [CustomerController::class, 'resend'])->name('resend');

Route::get('lang/{locale}',[LocaleController::class,'set'])->name('locale');
Route::get('', [HomeController::class, 'index'])->name('home');

Route::get('cvLink/{customer}', [CustomerController::class, 'cvLink'])->name('cvLink');

Route::group([
    'prefix'    => 'cv',
    'as'        => 'cv.',
], function () {
    foreach (config('nav.cv') as $item) {
        $name = Str::camel($item);
        $editFunction = $name . 'Edit';
        $storeFunction = $name . 'Store';

        Route::get("$name/{customer}", [CvController::class, $editFunction])->name($editFunction);
        Route::post("$name/{customer}", [CvController::class, $storeFunction])->name($storeFunction);
    }
});

Route::resource('customers', CustomerController::class)->middleware('auth:customer');


