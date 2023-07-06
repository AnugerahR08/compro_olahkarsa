<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('home', 'index');


    Route::prefix('company')->group(function () {
        Route::get('about', 'about');
        Route::get('contact_us', 'contact');
    });

    Route::prefix('services')->group(function () {
        Route::get('csr_communication', 'csrcomm');
        Route::get('csr_school', 'csrschool');
        Route::get('csr_rnd', 'csrrnd');
        Route::get('csr_innovation', 'csrinno');
    });

    Route::get('event', 'event');

    Route::prefix('home')->group(function () {
        Route::get('portofolio', 'portofolio');
    });
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login-proses',  'login_proses')->name('login-proses');
    Route::get('logout', 'logout')->name('logout');

    Route::group(['middleware' => ['auth']], function() {
        Route::get('xdadm', 'index');

    Route::get('register', 'register')->name('register');
    Route::post('register-proses', 'register_proses')->name('register-proses');
    });

  
});

