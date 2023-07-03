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
    return view('index');
});

Route::get('/About', function () {
    return view('about');
});

Route::get('/CSR_Communication', function () {
    return view('csrCommunication');
});

Route::get('/CSR_School', function () {
    return view('csrSchool');
});

Route::get('/CSR_Outlook', function () {
    return view('csrOutlook');
});

Route::get('/Event', function () {
    return view('event');
});

Route::get('/Portofolio', function () {
    return view('portofolio');
});

Route::get('/CSR_Mini_Class', function () {
    return view('formcsrmini');
});